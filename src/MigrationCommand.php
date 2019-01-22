<?php
/**
 * Created by L.
 * Author: wxuns
 * Link: https://www.wxuns.cn
 * Date: 2019/1/22
 * Time: 11:13
 */

function MigrationCommand()
{
    return [
        \Phpmig\Console\Command\InitCommand::class,
        \Phpmig\Console\Command\StatusCommand::class,
        \Phpmig\Console\Command\CheckCommand::class,
        \Phpmig\Console\Command\GenerateCommand::class,
        \Phpmig\Console\Command\UpCommand::class,
        \Phpmig\Console\Command\DownCommand::class,
        \Phpmig\Console\Command\MigrateCommand::class,
        \Phpmig\Console\Command\RollbackCommand::class,
        \Phpmig\Console\Command\RedoCommand::class
    ];
}