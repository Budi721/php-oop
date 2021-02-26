<?php

class SocialMedia {
    public string $name;

    final public function login(string $username, string $password):bool {
        return true;
    }
}

 /* final class Facebook extends SocialMedia {
    ERROR
      public function login(string $username, string $password):bool {
        return true;
     }
 }
 */

/* ERROR
class FakeFacebook extends Facebook {

}
*/