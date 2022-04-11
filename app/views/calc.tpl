{extends file="main.tpl"}

{block name=content}
 <section>
	<form form action="{$conf->action_root}calcCompute" method="post">
									<div class="fields">
										<div class="field half">
											<label for="waga">Podaj wagę w kg</label>
											<input type="text" name="waga" id="waga"  />
										</div>
										<div class="field half">
											<label for="wzrost">Podaj wzrost w cm</label>
											<input type="text" name="wzrost" id="wzrost" />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Oblicz" class="primary" /></li>
										<li><input type="reset" value="Wyczysc" /></li>
									</ul>
								</form>
                            </section>
							<section class="split">
								<section>
									<div class="contact-method">
										
{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol>
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}


{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol >
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($result->result)}
	<h4>Wynik</h4>
	<p>
	{$result->result}
	</p>
{/if}

</div>
</section>									
</section>
{/block}