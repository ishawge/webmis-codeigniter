<form action="<?php echo base_url('sys_filemanager.html');?>" method="get" id="fileForm">
<table class="table_add">
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td class="width right">名称:</td>
		<td>
			<input type="text" name="name" class="input" value="新建文件夹" style="width: 90%;" maxlength="16" />
		</td>
	</tr>
	<tr>
		<td class="right">权限:</td>
		<td>
			<input type="text" name="perm" class="input" value="0755" style="width: 40%;" maxlength="4" />
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="submit" id="fileSub" value="创建" />
			<input type="hidden" id="file_path" name="path">
			<input type="hidden" name="action" value="mkdir">
			<input type="hidden" id="file_editor" name="editor">
		</td>
	</tr>
</table>
</form>