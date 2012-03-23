<?php

$this->dispatcher->connect('task.cache.clear', array('sfSuperCache', 'clearCache'));
