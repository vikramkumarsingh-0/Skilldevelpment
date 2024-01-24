<?php
if (isset($_SESSION['message'])) {
    echo '<div class="alert alert-' . ($_SESSION['message_type'] ?? 'success') . '">' . $_SESSION['message'] . '</div>';
    unset($_SESSION['message']);
}
?>
