<? $view->layout('wrap'); ?>
<h1 class="info"><?=tr('Upgrade was successfully completed.')?></h1>
<i><?=tr('Do not forget to delete or rename the upgrade folder!')?></i><br>
<?= tr('Watch for updates on') ?> <a href="http://elfchat.ru" target="_black"><?=tr('the official site')?></a>.<br>
<?= tr('Follow as on') ?> <a href="https://twitter.com/elfchat" target="_black">ElfChat Twitter</a>.
<script type="text/javascript" src="http://elfchat.ru/event/upgrade/?serial=<?=$serial?>&url=<?=$chat_url?>"></script>
