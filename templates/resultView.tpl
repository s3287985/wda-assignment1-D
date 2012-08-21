{extends file="base.tpl"}
{block name=left_pane}
	<a class='button' href='{$WEB_ROOT}/search.php'> &lt; &lt; back to search view</a>
{/block}
{block name=right_pane}
	{include file="resultPanel.tpl"}
{/block}