<?php 
$link_limit = 7;
 ?>

<nav class="text-center">
	@if ($lista->lastPage() > 1)
	<ul class="pagination pagination-centered">
		<li class="{{ ($lista->currentPage() == 1) ? ' disabled' : '' }}">
			<a href="{{ $lista->url(1)}}">&laquo;</a>
		</li>
		@for ($i = 1; $i <= $lista->lastPage(); $i++)
		<?php 
          $half_total_links = floor($link_limit / 2);
          $from = $lista->currentPage() - $half_total_links;
          $to = $lista->currentPage() + $half_total_links;
          if ($lista->currentPage() < $half_total_links) {
          	$to += $half_total_links + $lista->currentPage();
          }
          if ($lista->lastPage() - $lista->currentPage() < $half_total_links) {
          	$from -= $half_total_links - ($lista->lastPage() - $lista->currentPage()) - 1;
          }
		 ?>
		 @if ($from < $i && $i < $to)
		 <li class="{{ ($lista->currentPage() == $i) ? ' active' : '' }}">
		 <a href="{{ $lista->url($i) }}">{{$i}}</a>
		 </li>
		 @endif
		 @endfor
		 <li class="{{ ($lista->currentPage() == $lista->lastPage()) ? ' disabled' : '' }}">
		 <a href="{{ $lista->url($lista->lastPage()) }}">
		 	&raquo;
		 </a></li>
	</ul>
	@endif
</nav>