<style>
	body {
		padding: 0px;
		margin: 0px;
	}
	.full-time-editor {
		width: 100%;
		height: 100%;
		position: relative;
	}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.4/build-config.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.4/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.4/adapters/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.3.7/socket.io.min.js"></script>
<script src="assets/js/diff.match.patch.js"></script>
<script src="assets/js/diff.engine.js"></script>

<textarea id="editor" class="full-time-editor"></textarea>

<script>
	Share('editor');
</script>