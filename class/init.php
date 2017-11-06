<?php 

function base_url($page,$uri) {
    return 'http://localhost/shop-native/'.$page.'/'.$uri;
}

function redirect($page,$uri) {
    return header('location: http://localhost/shop-native/'.$page.'/'.$uri);
}