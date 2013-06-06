<html>
<head>
	<title>DDS DATA REST API</title>
	<link rel="stylesheet" type="text/css" media="all" href="/assets/css/style.css">
</head>
<body>
<h1>DDS DATA REST API</h1>
<p class="CAUTION">
	! チュウイ !<br/>
	コノドキュメント　ハ　テイサイ　ノ　ツゴウジョウ　オオモジ　デ カカレテイルガ<br/>
	スベテ　コモジニ ヨミカエテ　コンゴトモ　ヨロシク<br/>
	<span class="CAUTION">(YOU HAVE TO REPLACE ALL CHARACTOR TO LOWER.)</span>
</p>
<dl>
	<dt>/API/1/</dt>
	<dd><p class="NOIMPLEMENTS">NO IMPLEMENTS</p></dd>
</dl>
<dl>
	<dt>/API/2/</dt>
	<dd><p class="NOIMPLEMENTS">NO IMPLEMENTS</p></dd>
</dl>
<dl>
	<dt>/API/3/</dt>
	<dd><p class="NOIMPLEMENTS">NO IMPLEMENTS</p></dd>
</dl>
<dl>
	<dt>/API/4/</dt>
	<dd>
		<h2>RELEASE NOTES</h2>
		<div class="VERSION">
			<dl>
				<dt>V1.0</dt>
				<dd>
					<ul>
						<li>・アクマケンサク</li>
						<li>・ガッタイシミュレート(セイビキ)</li>
					</ul>
				</dd>
			</dl>
		</div>
		<h2>ALLOWED FORMATS</h2>
		<ul>
			<li>JSON</li>
			<li>JSONP</li>
			<li>XML</li>
		</ul>

		<h2>RESOURCES</h2>
		<dl>
			<dt>/API/4/DEVILS</dt>
			<dd>
				<h3>OVERVIEW</h3>
				<p>
					このAPIは, キホンテキなアクマケンサクをおこなえます。<br/>
					シュゾクやLV, チカラやマリョクなどのゾクセイチをモトにケンサク可能です。
				</p>
				<h3>SAMPLE URIS</h3>
				<ul>
					<li>/API/4/DEVILS.JSON?CLASS[]=魔獣&amp;CLASS[]=破壊神&amp;SKILL=タルカジャ</li>
					<li>/API/4/DEVILS.XML?LV&gt;=40&amp;LV&lt;=80&amp;REGIST_BIND=無効</li>
				</ul>

				<h3>REFERENCE</h3>
				<table>
					<tr>
						<th>KEY</th>
						<th>VALUE</th>
					</tr>
					<tr>
						<td>CLASS</td>
						<td>CLASS NAME (EXAMPLE. CLASS=天使)</td>
					</tr>
					<tr>
						<td>SKILL</td>
						<td>SKILL NAME (EXAMPLE. SKILL=アギ)</td>
					</tr>
					<tr>
						<td>LV, HP, MP, POWER, TECHNIQUE, MAGIC, SPEED, LUCK</td>
						<td>STATUS VALUES (EXAMPLE. LV=10 / POWER&lt;=50 / SPEED&gt;=90)</td>
					</tr>
					<tr>
						<td>REGIST_* (PHYSICAL, GUN, FIRE, ICE, ELECTRIC, IMPACT, EXORCISM, CURSE<br />
							POISON, COLD, BIND, SLEEP, CONFUSION)</td>
						<td>
							弱点, 耐性, 無効, 反射, 吸収 (EXAMPLE. REGIST_GUN=反射)
						</td>
					</tr>
					<tr>
						<td>SORT_BY</td>
						<td>LV, HP, MP, POWER, TECHNIQUE, MAGIC, SPEED, LUCK ...(DEFAULT: LV)</td>
					</tr>
					<tr>
						<td>ORDER</td>
						<td>DEDC ASC (DEFAULT: ASC)</td>
					</tr>
					<tr>
						<td>LIMIT</td>
						<td>INTEGER (DEFAULT: 100)</td>
					</tr>
					<tr>
						<td>OFFSET</td>
						<td>INTEGER (DEFAULT: 0)</td>
					</tr>
				</table>
			</dd>
		</dl>
		<dl>
			<dt>/API/4/DEVILS/{DEVILNAME}/...</dt>
			<dd>
				<h3>OVERVIEW</h3>
				<p>
					このAPIは, アクマガッタイをシミュレートします。<br/>
					{DEVILNAME}にガッタイしたいアクマのナマエをニュウリョクしてください。<br/>
					いくつものアクマを/によりレンケツするコトで, ナンダンカイもシミュレートし,<br/>
					スキルもケイショウします。<br/>
					チュウイテンとしては, スキルのケイショウは, ソザイのアクマがスベテ<br/>
					シュトクカノウなスキルをオボエたゼンテイです。<br/>
				</p>
				<h3>SAMPLE URIS</h3>
				<ul>
					<li>/API/4/DEVILS/ゾウチョウテン</li>
					<li>/API/4/DEVILS/ナパイア/ケンタウロス</li>
					<li>/API/4/DEVILS/ナパイア/ケンタウロス/ジャックフロスト.json</li>
				</ul>

			</dd>
		</dl>

		
	</dd>
</dl>
</body>
</html>