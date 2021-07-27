<?php
    session_start();
    unset($_SESSION['email']);
    session_destroy();
    echo "<script>alert('Successfully logged out ! hope u come back soon');window.location='login.html'</script>"
?>