<?php
echo $this->renderSection('title');

echo $this->include('components/header');

echo $this->renderSection('content');

echo $this->include('components/footer');