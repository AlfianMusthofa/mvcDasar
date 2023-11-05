<?php

class About
{
    function index($nama = 'Alfian', $status = 'manusia')
    {
        echo "Hallo nama saya $nama, saya adalah seorang $status";
    }

    function page()
    {
        echo 'About/page';
    }
}
