<?php

use core\library\App;



$app = App::create()
->withErrorPage()
->withContainer()
->withEnviromentVariables();