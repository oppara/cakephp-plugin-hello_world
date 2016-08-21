<?php

Router::connect('/hello/*', array('controller' => 'pages', 'action' => 'index', 'plugin' => 'hello_world'));

