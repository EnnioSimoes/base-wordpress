<?php
/*
 * Plugin Name: Subscriber 2 comments
 * Description: Permite o usuário subscrever comentarios
 */

class KDM_Subscriber
{
    
    static $field_name = 'kdm_subscriber';
            
    function init()
    {
        add_action('comment_form', array('KDM_Subscriber', 'show_form'));
        add_action('comment_post', array('KDM_Subscriber', 'check_subscriber'), 10, 2);
        add_action('wp_loaded', array('KDM_Subscriber', 'unsubscriber'));
        add_filter('wp_mail_content_type', create_function('', 'return "text/html";') );
    }
    
    function show_form()
    {
        ?>
        <label>
            <input type="checkbox" name="<?php echo self::$field_name; ?>" value="1" />
            Desejo receber notificações de novos comentarios.
        </label>
        <?php
    }
    
    function check_subscriber($comment_id, $approved)
    {
        if(isset($_POST[self::$field_name]) && $_POST[self::$field_name]){
            $comment = array(
                'comment_ID' => $comment_id,
                'comment_karma' => '1'
            );
            wp_update_comment($comment);
        }
        
        if($approved){
            $comment = get_comment($comment_id);
            self::notify($comment);
        }
    }
    
    function notify($comment)
    {
        $post_id = $comment->comment_post_ID;
        $permalink = get_permalink($post_id);
        sprintf(
                'Novo comentario para %s. <a href="%s">Clique aqui para visualizar</a>'.
                '<a href="[unsubscribe]">Cancelar</a>',
                get_the_title($post_id),
                $permalink
        );
        $comments = get_comments(
                array(
                    'post_id' => $post_id,
                    'karma'   => '1'
                )
        );
        
        foreach ($comments as $c){
            if($c->comment_ID !== $comment->comment_ID){
                $url = add_query_arg('unsubscribe', $c->comment_ID);
                $message = str_replace('[unsubscribe]', $url, $message );
                wp_mail($comment->commtent_author_mail, 'Nofificação de comentarios', $message);
            }
        }
    }
    
    function unsubscriber()
    {
        $comment_id = (isset($_GET['unsubscribe'])) ? (int) $_GET['unsubscribe'] : FALSE;
        if(is_single() && $comment_id){
            $c = get_comment($comment_id);
            if($c->comment_karma == '1'){
                $comment = array(
                    'comment_ID' => $comment_id,
                    'karma' => '0'
                );
                wp_update_comment($comment);
                $msg = 'Você cancelou a subscrição!';
            }  else {
                $msg = 'Você já cancelou a subscrição... esqueceu???';
            }
            wp_die($msg);
        }
    }
    
}

add_action('plugins_loaded', array('KDM_Subscriber', 'init'));