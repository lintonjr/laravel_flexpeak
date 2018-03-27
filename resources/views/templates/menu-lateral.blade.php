<nav id="principal">
	<ul>
		<li>
			<a href="{{ url('/') }}">
				<i class="fas fa-home"></i>
				<h3>Home</h3>				
			</a>
		</li>
		<li>
			<a href="{{ action('AlunoController@index') }}">
				<i class="fas fa-user"></i>
				<h3>Alunos</h3>				
			</a>
		</li>
		<li>
			<a href="{{ action('CursoController@index') }}">
				<i class="fas fa-book"></i>
				<h3>Cursos</h3>				
			</a>
		</li>
		<li>
			<a href="{{ action('ProfessorController@index') }}">
				<i class="fas fa-graduation-cap"></i>
				<h3>Professores</h3>				
			</a>
		</li>
	<ul>
</nav>