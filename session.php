 <?php

// function start_session()
// {
//     if (!session_id()) {
//         session_start();
//         session_regenerate_id(true); // Enhance security
//     }
// }

// function set_session_data($key, $value)
// {
//     $_SESSION[$key] = $value;
// }

// function get_session_data($key)
// {
//     return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
// }

// function destroy_session()
// {
//     session_unset();
//     session_destroy();
// }


 

?>


 

//  loginsessionby brand

// <!-- // login.php
// require_once('session.php');

// // Authentication logic...

// if (is_authenticated()) {
//     start_session();
//     set_session_data('user_id', $user_id);
//     header('Location: profile.php');
// } else {
//     // Handle login failure
// }
















// <?php

// function start_session() {
//     if (!session_id()) {
//         ini_set('session.cookie_secure', 1);  // Enforce HTTPS
//         ini_set('session.cookie_httponly', 1); // Mitigate XSS
//         ini_set('session.cookie_samesite', 'Strict'); // Prevent CSRF
//         session_start();
//         session_regenerate_id(true); // Enhance security
//     }
// }

// ... other session functions as before


// require_once('session.php');

// // Authentication logic...

// if (is_authenticated()) {
//     start_session();
//     set_session_data('user_id', $user_id);
//     ini_set('session.gc_maxlifetime', 3600); // Set session timeout to 1 hour
//     header('Location: profile.php');
// } else {
//     // Handle login failure
// }
