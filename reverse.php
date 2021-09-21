
  <?php
  /**
   *
   */
  class reverseString
  {

    public function reverseWord($result){
      return implode(' ',array_map('strrev',explode(' ',$result)));
    }
  }


  ?>
