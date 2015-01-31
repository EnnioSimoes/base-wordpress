<?php
/*
 Plugin Name: get remote posts
 Description: Recupera posts remotos
 Version: 1.0
 Author: Ennio
 Author URI: NULL
 */
class KDM_Posts
{
    static $prefix = 'grp_';
    
    function activation()
    {
        $opt = array(
            'search'    => 'wordpress',
            'count'     => 3
        );
        
        add_option(self::$prefix . 'opt', $opt, FALSE, 'no' );
        //add_option(self::$prefix . 'count', 3, FALSE, 'no' );
    }
    
    function deactivation()
    {
        delete_option(self::$prefix . 'opt');      
        delete_transient('grp');
    }
    
    function init()
    {
        add_action('admin_menu', array('KDM_Posts', 'admin_menu'));
    }
    
    function admin_menu()
    {
        add_menu_page('Dados Remotos', 'Dados Remotos', 'administrator', 'grp-data', array('KDM_Posts', 'options_form'));
        //add_submenu_page('grp-data', 'Sub Menu', 'Submenu', 'administrator', 'grp-subdata', array('KDM_Posts', 'subcontent'));
        //add_submenu_page('index.php', 'Sub Menu', 'Submenu', 'administrator', 'grp-subdata', array('KDM_Posts', 'subcontent'));
        //add_submenu_page('options-general.php', 'Sub Menu', 'Submenu', 'administrator', 'grp-subdata', array('KDM_Posts', 'subcontent'));
        //add_theme_page('Sub Menu', 'Submenu', 'administrator', 'grp-subdata', array('KDM_Posts', 'subcontent'));
        //add_plugins_page('Sub Menu', 'Submenu', 'administrator', 'grp-subdata', array('KDM_Posts', 'subcontent'));
    }
    
    function options_form()
    {
        $tab_cur = (isset($_GET['tab'])) ? $_GET['tab'] : 'opt';
        if(isset($_GET['settings-updated']))
        delete_transient('grp');
        ?>
        <div class="wrap get-remote-posts">
            <h2>Configurações do Plugin</h2>
            <h2 class="nav-tab-wrapper">
                <?php
                $tabs = array(
                    'opt' => 'Opções',
                    'help' => 'Suporte'
                );
                foreach ($tabs as $tab => $label){
                    printf(
                        '<a href="%s" class="nav-tab%s">%s</a>',
                        admin_url('admin.php?page=grp-data&tab='.$tab),
                        ($tab == $tab_cur) ? ' nav-tab-active' : '',
                        $label
                    );
                }
                ?>
            </h2>
            <?php if($tab_cur == 'opt'){ ?>
            <?php settings_errors(); ?>
            <form method="post" action="options.php">
                <?php settings_fields('grp'); ?>
                <?php do_settings_sections('grp'); ?>
                <?php submit_button(); ?>
                
            </form>
            <?php   
            
            }else{ 
                echo 'tela de suporte!';
            }
            ?>
            
        </div>

        <?php
    }
    
    function settings()
    {
        $opt = get_option(self::$prefix . 'opt');
        if(!$opt || !is_array($opt)){
            $opt = array(
                'search'    => '',
                'count'     => ''
            );
        }
            add_settings_section('grp-section', 'Opções Personalisadas', array('KDM_Posts', 'section'), 'grp');
            add_settings_field(
                'grp-search',
                'Termos de busca',
                array('KDM_Posts', 'text'),
                'grp',
                'grp-section',
                array(
                    'name'  => 'search',
                    'value' => $opt['search']
                )
            );
            add_settings_field(
                'grp-count',
                'QTDE Posts',
                array('KDM_Posts', 'text'),
                'grp',
                'grp-section',
                array(
                    'name' => 'count',
                    'value' => $opt['count']
                )
            );
//            add_settings_field($id, $title, $callback, $page)
        
            register_setting('grp', self::$prefix.'opt', array('KDM_Posts', 'check_count'));
        
        
        
    }
            
    function section()
    {
        echo 'Abertura de Seção';
    }
    
    function text($args)
    {
        echo '<input type="text" name="'.self::$prefix.'opt['.$args['name'].']" value="'.$args['value'].'" />';
    }
    
    function check_count($value)
    {
        $num = (int) $value['count'];
        if(!$num){
            $value = FALSE;
            add_settings_error('count', 'isNaN', 'O valor informado não é um numero!');
        }
        return $value;
    }
    
    function get_posts()
    {
        $posts = get_transient('grp');
        if(!$posts){
            $posts = array();
            $opt = get_option(self::$prefix.'opt');
            if(!is_array($opt))
                return FALSE;

            $url = sprintf(
            'http://mazetto.blog.br/remote-posts.php?s=%s&count=%d',
            $opt['search'],
            (int) $opt['count']        
            );
            $r = wp_remote_get($url, array('sslverify' => FALSE));
            $data = json_decode($r['body']);
            if(is_object($data) && isset($data->status)){
                if($data->status == 'success'){
                    foreach ($data->content as $d){
                        $post = sprintf(
                            '<a href="%1$s" title="%2$s">%2$s</a> em %3$s',
                            $d->url,
                            $d->title,
                            date('d/m/Y', strtotime($d->date))
                        );
                        array_push($posts, $post);
                    }
                }else{
                array_push($posts, $data->content);
                }
            }else{
                array_push($posts, 'Não foi possivel acessar o servidor remoto...');
            }
            set_transient('grp', $posts, 60*60);
        }
        return $posts;
    }
    
    function show_posts()
    {
        $posts = self::get_posts();
        echo '<div class="get-remote-posts">'
        .'<h2>Publicações Remotas</h2>'
        .'<ul>';
        foreach ($posts as $p)
            echo "<li>{$p}</li>";
        
        echo '</ul></div>';
    }
}

function list_remote_posts()
{
    KDM_Posts::show_posts();
}

register_activation_hook(__FILE__, array('KDM_Posts', 'activation'));
register_deactivation_hook(__FILE__, array('KDM_Posts', 'deactivation'));

add_action('plugins_loaded', array('KDM_Posts', 'init'));
add_action('admin_init', array('KDM_Posts', 'settings'));

?>
