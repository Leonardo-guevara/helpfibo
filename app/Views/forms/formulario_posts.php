
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('<?=base_url()?>/public/assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Formurario de posts</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">helpfibo</a></li>
            <li>formulario Posts</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0">

          <div class="col-lg-5 quote-bg" style="background-image: url(<?=base_url()?>/public/assets/img/quote-bg.jpg);"></div>

          <div class="col-lg-7 " class="php-email-form">
            <div class="php-email-form">>
             <!-- <form action="forms/quote.php" method="post" class="php-email-form"> -->
            <?php echo form_open_multipart($data['ruta'],[]);?> 
              <?php echo  csrf_field() ?>
              <h3><?=$data['formulario']?></h3>
              <p>
                <?= $validation->listErrors() ?>
                <?php foreach ($errors as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
              </p>
              <div class="row gy-4">

                <!-- picture --> 
                <hr>
                    <div class="col-md-12">
                        <?php 
                        if (isset($_FILES['picture']["name"]) and $_FILES['picture']["name"] !== '' ) {
                            // ECHO ($_FILES['picture']["name"]) .'<BR>'; 
                            echo $data_picture = $_FILES['picture']["name"];
                             ECHO'<BR>';   
                        }elseif (isset($value['picture'])) {
                               echo '<img style="width: 10rem;" src='.Base_url().'/'. esc($value['picture']).'
                                    class=" img-fluid img-thumbnail">';
                                    $data_picture = $value['picture'];
                        }else { $data_picture = "";}
                            $picture = [
                                'type'        => 'file',
                                'name'        => 'picture',
                                'id'          => 'inputGroupFile01',
                                'src'          => $data_picture,
                                "accept"      => "image/*",
                            ];
                            echo form_upload($picture);     
                        ?>
                    </div>
                  <!-- title -->
                  <div class="col-md-6">
                         <?php 
                            if (isset($_POST['title'])){
                                $data_title = ($_POST['title']);   
                            }elseif (isset($value['title'])) {
                                $data_title = $value['title'];
                            }else {$data_title = "";}
                            
                            $title = [
                                'type'          => 'text',
                                'name'          => 'title',
                                'id'            => 'validationTooltip01',
                                'value'         =>  $data_title,
                                'placeholder'   => "Titulo",
                                'class'         => "form-control form-control-user",
                            ];
                            echo form_input($title);     
                        ?>
                    </div>
                <!-- description -->
                  <hr>
                    <div class="col-md-6">
                        <?php 
                        if (isset($_POST['description'])) {
                            $data_description = ($_POST['description']);   
                       }elseif (isset($value['description'])) {
                                $data_description = $value['description'];
                            }else { $data_description = "";}
                        $description = [
                            'type'  => 'text',
                            'name'  => 'description',
                            'id'    => 'validationTooltip02',
                            'value' =>  $data_description,
                            'placeholder' =>"Descripción",
                            'class'       =>"form-control form-control-user",
                        ];
                        echo form_input($description);     
                        ?>
                    </div>
                <!-- description -->
                    <div class="col-md-6">
                        <?php 
                        if (isset($_POST['description'])) {
                            $data_description = ($_POST['description']);   
                       }elseif (isset($value['description'])) {
                                $data_description = $value['description'];
                            }else { $data_description = "";}
                        $description = [
                            'type'  => 'text',
                            'name'  => 'description',
                            'id'    => 'validationTooltip02',
                            'value' =>  $data_description,
                            'placeholder' =>"Descripción",
                            'class'       =>"form-control form-control-user",
                        ];
                        echo form_input($description);     
                        ?>
                    </div>
                <!-- summernote -->
                  <hr>
                    <div class="col-md-12">
                        <?php 
                            if (isset($_POST['summernote'])) {
                                $data_summernote = ($_POST['summernote']);   
                            }elseif (isset($summernote)) { 
                                $data_summernote = $summernote;
                            }else { $data_summernote = "";}
                            $text = [
                                'type'        => 'textarea',
                                'name'        => 'summernote',
                                'id'          => 'summernote',
                                'value'       =>  $data_summernote,
                            ];
                            echo form_textarea($text);     
                        ?>
                    </div>
                <!-- button -->
                <hr>
                  <div class="col-md-12 text-center">
                      <?php 
                          $data = [
                              'name'    => 'button',
                              'class'   => 'btn btn-primary ',
                              'id'      => 'sendMessageButton',
                              'value'   => 'ENVIAR',
                              'type'    => 'submit',
                              'content' => 'submit'
                          ];
                          echo form_submit($data);   
                      ?>
                  </div>


              </div>
            </form>
            </div>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

  <script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>
