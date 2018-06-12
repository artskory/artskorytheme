<?php


class Arstkory_Metabox
{

    private $id;
    private $title;
    private $post_type;
    private $fields = [];

    /**
     * Arstkory_Metabox constructor.
     * @param $id ID de la boite
     * @param $title Titre de la boite
     * @param $post_type Post type
     */
    public function __construct($id, $title, $post_type)
    {
        add_action('admin_init', array(&$this, 'create'));
        add_action('save_post', array(&$this, 'save'));
        $this->id = $id;
        $this->title = $title;
        $this->post_type = $post_type;
    }

    public function create()
    {
        if (function_exists('add_meta_box')) {
            add_meta_box($this->id, $this->title, array(&$this, 'render'), $this->post_type);
        }
    }

    public function save($post_id)
    {
        // On ne fait rien en cas de save Ajax
        if (
            (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) ||
            (defined('DOING_AJAX') && DOING_AJAX)
        ) {
            return false;
        }

        // Vérifier permission
        if (!current_user_can('edit_post', $post_id)) {
            return false;
        }

        // On vérifie le nonce
        if (!wp_verify_nonce($_POST[$this->id . '_nonce'], $this->id)) {
            return false;
        }

        foreach ($this->fields as $field) {
            $meta = $field['id'];
            if (isset($_POST[$meta])) {
                $value = $_POST[$meta];
                if (get_post_meta($post_id, $meta)) {
                    update_post_meta($post_id, $meta, $value);
                } else {
                    if ($value === '') {
                        delete_post_meta($post_id, $meta);
                    } else {
                        add_post_meta($post_id, $meta, $value);
                    }
                }
            }
        }

    }

    public function render()
    {
        global $post;
        foreach ($this->fields as $field) {
            extract($field);
            $value = get_post_meta($post->ID, $id, true);
            if ($value == '') {
                $value = $default;
            }
            require __DIR__ . '/' . $field['type'] . '.php';
        }
        echo '<input type="hidden" name="' . $this->id . '_nonce" value="' . wp_create_nonce($this->id) . '">';
    }

    public function add($id, $label = '', $type = 'text', $default = '')
    {
        $this->fields[] = [
            'id' => $id,
            'name' => $label,
            'type' => $type,
            'default' => $default
        ];
        return $this;
    }

}

$box = new Arstkory_Metabox('client', 'Client', 'post');
$box->add('test', 'Nom du client : ');


function arstkory_save_meta($post_id)
{
}