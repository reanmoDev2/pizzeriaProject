<?php
class Menus extends Controller
{
  public function __construct()
  {
    if (isset($_SESSION['user_id'])) {
    } else {
      redirect('logins/index');
    }
    $this->menuModel = $this->model('Menu');
  }

  public function index()
  {
    $data = [
      'activeSide' => 'menu'
    ];
    $this->view('menus/index', $data);
  }

  public function show()
  {
    $data = [
      'activeSide' => 'menu',
      'selectedItem' => '1' //trim($_POST['id'])
    ];
    $this->view('menus/show', $data);
  }

  public function create()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'activeSide' => 'menu',
        'name' => trim($_POST['name']),
        'name_err' => '',
        'course' => trim($_POST['mealCategory']),
        'course_err' => '',
        'price_small' => trim($_POST['price1']),
        'price_medium' => trim($_POST['price2']),
        'price_large' => trim($_POST['price3']),
      ];
      // Validation

      if (empty($data['name'])) {
        $data['name_err'] = 'Bitte geben Sie den Namen des Gerichts ein';
      } else {
        if ($this->menuModel->findMenuByName($data['name'])) {
          $data['name_err'] = 'Der Name existiert bereits in der Speisekarte';
        }
      }

      if (empty($data['course'])) {
        $data['course_err'] = 'Bitte treffen Sie eine Auswahl';
      }

      if (empty($data['name_err'])  && empty($data['course_err'])) {
        // daten verarbeiten
        redirect('menus/index');
      } else {
        $this->view('menus/create', $data);
      }
    } else {
      $data = [
        'activeSide' => 'menu',
        'name' => '',
        'nameErr' => '',
        'course' => '',
        'courseErr' => '',
        'priceSmall' => '',
        'priceMedium' => '',
        'priceLarge' => '',
      ];
      $this->view('menus/create', $data);
    }
  }
}
