<?php
    $text = "Pellentesque vitae consectetur sem. Mauris imperdiet tristique sem. Mauris vel nisl mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer sagittis eleifend risus, quis facilisis lacus fermentum molestie. Praesent bibendum tellus non justo porta, eget pulvinar mauris fermentum. Sed gravida eros interdum, sodales nisi vel, maximus augue.

    Proin pretium suscipit lorem, et condimentum massa ullamcorper vitae. Fusce et ornare eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque mollis, enim eget tincidunt viverra, lorem velit sodales lorem, at sollicitudin diam urna eget nisi. Integer bibendum ac libero molestie tempus. Phasellus id faucibus dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam facilisis dui vel diam venenatis, sit amet auctor augue dignissim. Donec ut hendrerit odio. Ut faucibus sapien ipsum, sed dapibus mauris faucibus at. Duis orci nulla, tincidunt at ultricies et, tincidunt at leo. Nulla laoreet sodales lacus, quis vestibulum ante vulputate efficitur. Sed maximus odio est, ac interdum nunc feugiat non. In rutrum erat fringilla, eleifend augue at, accumsan augue. Aenean interdum mollis elit ac pharetra.
    
    Donec pretium vel dolor volutpat lobortis. Pellentesque malesuada lacus sit amet porttitor semper. Mauris maximus, orci et ultrices volutpat, tortor tellus consectetur lectus, sit amet congue lectus dui in justo. Donec tincidunt commodo lacinia. Quisque facilisis dictum sapien a fringilla. Nunc vestibulum, sem ut vulputate convallis, lacus lorem imperdiet erat, et consequat quam mi quis diam. Vestibulum iaculis vehicula felis, a imperdiet arcu feugiat porta. Donec mollis nisl sit amet tellus lobortis, vel tincidunt odio pretium. Pellentesque accumsan tincidunt sapien non mattis.
    
    Sed auctor lacinia lacus, vel auctor risus posuere nec. Morbi tempor est at erat posuere convallis. Curabitur eget auctor ipsum. Cras interdum tempus facilisis. Vestibulum venenatis erat a ex tempus lacinia. Mauris auctor sollicitudin posuere. Praesent nec quam ut quam ultrices rutrum. Ut sit amet molestie quam, et laoreet tellus. Vivamus vehicula ante nibh, a aliquam nunc pretium a. Donec justo risus, dictum sit amet eleifend eu, bibendum in dolor. Duis interdum consequat erat, vitae commodo quam varius sed. Aenean at massa ligula. Nunc in nisi eu massa porttitor malesuada. Maecenas quis maximus neque.
    
    Fusce non arcu id ex fermentum mollis. Praesent fringilla molestie velit, id ultrices elit molestie at. Nullam at tincidunt neque. Sed et felis aliquam, elementum nunc eget, dapibus justo. In pharetra nec diam sed laoreet. Nunc vel pulvinar arcu, non volutpat est. Vestibulum egestas, lorem a scelerisque sagittis, tellus enim interdum ante, ac varius magna dolor quis augue. Suspendisse potenti. Quisque dui erat, eleifend et libero ac, viverra ultrices eros. Proin iaculis urna eu neque luctus, malesuada volutpat arcu viverra. Nam neque justo, ornare sit amet mollis nec, euismod et justo.
    
    Nam tristique risus risus, semper sagittis leo hendrerit quis. Cras mauris elit, suscipit quis ullamcorper ac, pulvinar eu velit. Morbi ut risus ut nunc laoreet efficitur vel et mauris. Donec finibus nisi at dapibus pharetra. Nunc finibus purus non risus bibendum lobortis. Vivamus condimentum nisi lacus, at lobortis augue efficitur in. Ut massa augue, pretium vel mi ac, fringilla gravida sem. Ut ligula nisi, ullamcorper quis lorem vitae, cursus aliquam arcu. Morbi quis erat pharetra, elementum sapien quis, eleifend lacus. Phasellus efficitur odio eu lobortis sagittis. Praesent eu luctus dolor, sed consequat tortor.
    
    Ut a faucibus nunc. Proin sit amet urna nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent eget purus erat. Maecenas non dictum nunc, vitae eleifend augue. Proin porta purus a erat pellentesque, ut venenatis nisl auctor. Nulla fringilla nec ligula id pharetra.
    
    In ac lacus tellus. Donec mattis libero arcu, eu aliquam nisi euismod tempor. Quisque ac purus sit amet magna mattis tempus ac vel augue. Sed tincidunt accumsan magna, ac aliquam erat blandit quis. Curabitur non ligula quis ligula rutrum accumsan ut et nisl. Quisque euismod faucibus nunc vitae tristique. Suspendisse potenti.
    
    Sed porta tristique nisl vel convallis. Proin bibendum, purus ac fringilla dapibus, turpis enim lobortis quam, ut aliquet mauris leo id sem. Sed elit ligula, congue non elementum ac, imperdiet quis mauris. Ut tempus lorem vulputate, ullamcorper justo ut, egestas neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur interdum augue eu urna vestibulum pellentesque. Proin interdum at turpis vel lobortis. Nullam nisi enim, imperdiet eget ex a, ultricies hendrerit sapien. Donec quis dolor neque. Praesent sollicitudin, augue non imperdiet tempus, felis enim euismod ligula, a consequat velit erat quis turpis.
    
    Nulla mollis venenatis arcu, at facilisis erat congue sed. Praesent ipsum felis, faucibus eget fermentum pellentesque, ultrices quis erat. Maecenas elementum, odio id posuere pharetra, ligula leo malesuada diam, eget egestas ante lectus et arcu. Curabitur malesuada sem massa, at tempor arcu tempus ut. Nullam sollicitudin porttitor mi, vitae semper elit auctor ac. Integer blandit dui id eleifend lobortis. Vivamus quam enim, semper quis luctus in, sagittis id tortor.
    
    ";

    if (isset($_POST['search'])) {
        $search = trim($_POST['search']);
        $highlighted_text = highlight_text($text, $search);
    } else {
        $highlighted_text = $text;
    }

    function highlight_text($text, $search)
    {
        if (strpos($search, '"') !== false) {
            $phrase = trim($search, '"');
            $text = preg_replace("/\b$phrase\b/i", '<mark>$0</mark>', $text);
        } else {
            $words = preg_split('/\s+/', $search);
            foreach ($words as $word) {
                $regex = "/\b" . preg_quote($word) . "\w*\b/i";
                $text = preg_replace($regex, '<mark>$0</mark>', $text);
            }
        }
        return $text;
    }?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<form method="post" action="">
        <input type="text" name="search" placeholder="Enter word or combination">
        <input type="submit" value="Search">
</form>
<p><?php
    echo $highlighted_text;
    ?></p>
</body>
</html>

