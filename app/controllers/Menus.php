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
    $data = [
      'activeSide' => 'menu',
      'name' => '',
      'name_err' => '',
      'course' => '',
      'course_err' => '',
      'price_small' => '',
      'price_medium' => '',
      'price_large' => '',
      'description' => '',
      'img' => '',
      'img_err' => '',
      'db_err' => '',
    ];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data['name'] =  trim($_POST['name']);
      $data['course'] =  trim($_POST['mealCategory']);
      $data['price_small'] =  trim($_POST['price1']);
      $data['price_medium'] =  trim($_POST['price2']);
      $data['price_large'] =  trim($_POST['price3']);
      $data['description'] =  trim($_POST['comment']);

      $validateName = $this->validateInputs($data);

      $statusName = $validateName["status"];
      $data = $validateName["data"];

      $validateImg = $this->validateImg($data);

      $statusImg = $validateImg['status'];
      $data = $validateImg['data'];

      if ($statusName) {
        if ($statusImg) {
          if ($this->insertIntoDB($data)) {
            $target_dir = dirname(__DIR__) . "\storage\\" . $this->menuModel->db->getLastId() . "\\";
            $target_file = $target_dir . basename($_FILES["uploadImg"]["name"]);
            if ($this->uploadFile($target_file, $target_dir)) {
              if ($this->updateImgInDB($data, $target_file)) {
                redirect('menus/index');
              } else {
                $this->view('menus/create', $data);
              }
            } else {
              $this->view('menus/create', $data);
            }
          } else {
            $this->view('menus/create', $data);
          }
        } else {
          $this->view('menus/create', $data);
        }
      } else {
        $this->view('menus/create', $data);
      }
    } else {
      $data['db_err'] = 'DB ERROR';
      $this->view('menus/create', $data);
    }
  }

  private function validateImg($data)
  {
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
      $check = getimagesize($_FILES["uploadImg"]["tmp_name"]);
      if ($check !== false) {
      } else {
        $data['img_err'] = 'Sie haben kein valides Bild ausgewählt. ';
      }
    }
    // Check file size
    if ($_FILES["uploadImg"]["size"] > 500000) {
      // echo "Sorry, your file is too large.";
      $data['img_err'] .= 'Das Bild ist zu groß. ';
    }
    // Allow certain file formats
    // if (
    //   $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    //   && $imageFileType != "gif"
    // ) {
    //   $data['img_err'] .= 'Das Format wird nicht unterstützt. ';
    //   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    // }
    if (empty($data['img_err'])) {
      return ["status" => true, "data" => $data];
    } else {
      return ["status" => false, "data" => $data];
    }
  }

  private function validateInputs($data)
  {
    if (empty($data['name'])) {
      $data['name_err'] = 'Bitte geben Sie den Namen des Gerichts ein. ';
    } else {
      if ($this->menuModel->findMenuByName($data['name'])) {
        $data['name_err'] .= 'Der Name existiert bereits in der Speisekarte. ';
      }
    }

    if (empty($data['course'])) {
      $data['course_err'] = 'Bitte treffen Sie eine Auswahl. ';
    }

    if (empty($data['name_err']) && empty($data['course_err'])) {
      return ["status" => true, "data" => $data];
    } else {
      return ["status" => false, "data" => $data];
    }
  }

  private function insertIntoDB($data)
  {
    if ($this->menuModel->insertMeal($data)) {
      return true;
    } else {
      return false;
    }
  }

  private function uploadFile($target_file, $target_dir)
  {
    if (!file_exists($target_dir)) {
      mkdir($target_dir);
    }
    if (move_uploaded_file($_FILES["uploadImg"]["tmp_name"], $target_file)) {
      return true;
    } else {
      return false;
    }
  }

  private function updateImgInDB($data, $target_file)
  {
    $data['img'] = $target_file;
    if ($this->menuModel->updateImage($data['img'])) {
      return true;
    } else {
      return false;
    }
  }
}
