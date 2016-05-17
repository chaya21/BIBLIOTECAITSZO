    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('Actividades', array('controller' => 'users', 'action' => 'login'), array('class' => 'navbar-brand')) ?>
          <br>
          <br>
          <br>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php echo $this->Form->create('User', array('class' => 'navbar-form navbar-right')); ?>
            <div class="form-group">
              <?php echo $this->Form->input('username', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Usuario')); ?>
            </div>
            <div class="form-group">
              <?php echo $this->Form->input('password', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Contraseña')); ?>
            </div>
           <?php echo $this->Form->end(__('Login')); ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenido...</h1>
        <p>Actividades Extra Escolares..</p>
        <?php echo $this->Html->link('REGISTRATE', array( 'action' => 'add'), array('class' => 'btn btn-primary btn-lg"')) ?>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Actividades Culturales</h2>
          <p>Fomentar mediante el arte y la Cultura, la conciencia de nuestra nacionalidad y diversidad cultural, con sentido de identidad y respeto a los valores humanos . Promover la participación politécnica en festivales, reuniones y otros eventos de carácter artístico ó cultural, nacionales.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Actividades Deportivas</h2>
          <p>La Cultura Física se practica tomando en cuenta  la actividad física, la recreación y el deporte a través de programas permanentes y sistemáticos que apoyen la formación de de los alumnos en coordinación con la Dirección de Fomento Deportivo y sean alumnos  mas sanos, competentes y competitivos, con un amplio potencial de trabajo en equipo que se refleje en un mayor desarrollo social y humano, en una integración comunitaria, que estimule un mejoramiento de las condiciones de vida  y que genere deportistas de excelencia nacional.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Actividades civicas</h2>
          <p>En este contexto, la recreación cívica  son prácticas fundamentales para la formación de aptitudes, capacidades, hábitos y destrezas que permiten el desarrollo armónico e integral de los estudiantes del ITSZO.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Actividades Extra Escolares 2015</p>
      </footer>
    </div> <!-- /container -->
