// Rimuovo l'admin bar di WordPress per tutti gli utenti tranne amministratori
add_action('after_setup_theme', 'mrc_remove_admin_bar');
 
function mrc_remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
    }
}
