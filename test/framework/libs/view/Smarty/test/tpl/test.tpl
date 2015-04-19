
{$articletitle}
{$arr.title} {$arr.author}
{$arr['title']|cat:"猫的"} {$arr['author']}
{$mao|default:"aa"}
{$time|date_format:"Y:m:d H:i:s"}
<br/>
{$url|escape:"url"}
<br/>
{$name|upper}
<br/>
{if $score gt 60}
	及格
{else}
	不及格
{/if}
<br/>
{section name=i loop=$info}
	{$info[i].title}
	{$info[i].name}
	{$info[i].content}

<br/>
{/section}
<br/>
{foreach item=article from=$info}
	{$article['title']}
	{$article['name']}
	{$article['content']}
<br/>
{foreachelse}
	当前没有文章

{/foreach}
<br/>
{include file="header.tpl" title="网站标题" table_color="#c0c0c0"}
<br/>
{$myobj->meth1(array('苹果','熟了'))}
<br/>
{'Y-m-d'|date:$time}
<br/>
{'v'|str_replace:'c':$str }
<br/>
{f_test p1='aa' p2='bb'}
