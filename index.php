<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php 加密解密扩展:cryptopp</title>
    </head>
    <body>
        <?php
        $key = "key";
        $cryptopp = new cryptopp($key);
        $str = "1234567890";
        ?>
        <div>
            <h3>明文</h3>
            <p><?php echo $str; ?></p>
            <h3>密钥</h3>
            <p><?php echo $key ?></p>
            <h3>密文</h3>
            <p><?php echo $tmp = $cryptopp->encode($str); ?></p>
            <h3>解密</h3>
            <p><?php echo $cryptopp->decode($tmp) ?></p>
            <h3>md5</h3>
            <p><?php echo cryptopp::md5($str); ?></p>
            <h3>sha1</h3>
            <p><?php echo cryptopp::sha1($str); ?></p>
            <h3>sha256</h3>
            <p><?php echo cryptopp::sha256($str); ?></p>
            <h3>sha512</h3>
            <p><?php echo cryptopp::sha512($str); ?></p>
        </div>
    </body>
</html>
