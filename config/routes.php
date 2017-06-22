<?php

return [
    /* Url                                                              => Controller/action */

    'admin'                                                             => 'admin/dashboard',
    '<username:[a-zA-Z0-9_ -@.]+>/view/<slug:[a-zA-Z0-9_ -]+>.html'          => 'resume/view',
    '<username:[a-zA-Z0-9_ -@.]+>/update/<slug:[a-zA-Z0-9_ -]+>.html'          => 'resume/update',


];