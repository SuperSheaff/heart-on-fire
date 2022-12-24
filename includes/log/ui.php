<?php

if (! defined('ABSPATH')) exit; // Exit if accessed directly

/**
 * Main class for HeartOnFireLogUI
 */
class HeartOnFireLogUI
{
    /**
     * @var HeartOnFireLogTable
     */
    protected $listTable = null;
    protected $screens = array();

    function __construct()
    {
        add_action('admin_menu', array(&$this, 'heartonfire_log_create_admin_menu'), 20);
    }

    /**
     * Create admin menu
     * @return void
     */
    function heartonfire_log_create_admin_menu()
    {
        $this->screens['main'] = add_menu_page(
            __('Site Logs', 'Page Title', 'heartonfire'),
            __('Site Logs', 'Menu Title', 'heartonfire'),
            'edit_themes',
            'heartonfire_log_page',
            array(&$this, 'heartonfire_activity_log_page_func'),
            'dashicons-visibility',
            '99'
        );
        add_action('load-' . $this->screens['main'], array(&$this, 'get_list_table'));
    }

    /**
     * @return HeartOnFireLogTable
     */
    public function get_list_table()
    {
        if (is_null($this->listTable)) {
            $this->listTable = new HeartOnFireLogTable(array('screen' => $this->screens['main']));
        }

        return $this->listTable;
    }

    /**
     * Set up log page
     * @return void
     */
    public function heartonfire_activity_log_page_func()
    {
        $this->get_list_table()->prepareItems();
        ?>
        <div class="wrap">
            <h1 class="hof-title"><?php echo __('Site Activity Log', 'Page and Menu Title', 'heartonfire'); ?></h1>

            <form id="activity-filter" method="get">
                <input type="hidden" name="page" value="<?php echo esc_attr($_REQUEST['page']); ?>" />
                <?php $this->get_list_table()->display(); ?>
            </form>
        </div>
        <?php
    }
}
