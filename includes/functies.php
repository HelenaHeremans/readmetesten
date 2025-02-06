<?php

function checkInput($input) {
    return htmlspecialchars(addslashes(trim($input)));
}