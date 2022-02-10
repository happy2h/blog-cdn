</div>

</div>

<div id="footer">

	<div id="footer-content" class="clear">

		<div id="footer-content-left">

		<?php if (!$this->options->navPosition): ?>
			<nav id="nav-2">

			<?php $this->need('nav.php'); ?>

			</nav>
		<?php endif; ?>
		
            <p><?php $this->options->beian(); ?></p>

            <p>©<?php $this->options->title(); ?> | <span id="site_runtime"></span></p>

			<?php if ($this->options->upyun): ?>

			<p>
				<a id="youpaiyun" target="_blank" href="https://www.upyun.com/?utm_source=lianmeng&utm_medium=referral">
				本网站由
				<img src="<?php $this->options->themeUrl('IMG/'); ?>upyun.png" alt="又拍云">
				提供CDN加速/云存储服务
				</a>
			</p>

			<?php endif; ?>

		</div>




	</div>



	<script src="<?php $this->options->themeUrl('JS/jquery.min.js'); ?>"></script>

	<script src="<?php $this->options->themeUrl('JS/jquery.pjax.min.js'); ?>"></script>

 	<script src="<?php $this->options->themeUrl('JS/X.js'); ?>"></script>
	
	<script src="<?php $this->options->themeUrl('JS/clipboard.min.js'); ?>"></script>

	<script src="<?php $this->options->themeUrl('JS/prism.js'); ?>"></script>

	<script src="<?php $this->options->themeUrl('JS/toastr.min.js'); ?>"></script>

	<script src="<?php $this->options->themeUrl('JS/jquery.fancybox.min.js'); ?>"></script>

    <script src="<?php $this->options->themeUrl('JS/nprogress.js'); ?>"></script>

	<?php $this->footer(); ?>



	<script>

		ajaxc();

		PreFancybox();

		show_site_runtime("<?php getBuildTime($this->options->builtTime);?>");

	</script>
	
	<script>
document.body.addEventListener('copy', function (e) {
    if (window.getSelection().toString() && window.getSelection().toString().length > 42) {
        setClipboardText(e);
        // alert('商业转载请联系作者获得授权，非商业转载请注明出处哦~\n谢谢合作~(｡・`ω´･)');
    }
}); 
function setClipboardText(event) {
    var clipboardData = event.clipboardData || window.clipboardData;
    if (clipboardData) {
        event.preventDefault();
        var htmlData = ''
            + '著作权归作者所有。<br>'
            + '商业转载请联系作者获得授权，非商业转载请注明出处。<br>'
            + '作者：<?php $this->author() ?><br>'
            + '链接：' + window.location.href + '<br>'
            + '来源：<?php $this->options->siteUrl(); ?><br><br>'
            + window.getSelection().toString();
        var textData = ''
            + '著作权归作者所有。\n'
            + '商业转载请联系作者获得授权，非商业转载请注明出处。\n'
            + '作者：<?php $this->author() ?>\n'
            + '链接：' + window.location.href + '\n'
            + '来源：<?php $this->options->siteUrl(); ?>\n\n'
            + window.getSelection().toString();
 
        clipboardData.setData('text/html', htmlData);
        clipboardData.setData('text/plain',textData);
    }
}
</script>



</div>


<div id="m_top">

	<span><a href="#top"><i class="i gototop"></i></a></span>

</div>


</body>

