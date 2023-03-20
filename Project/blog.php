<!DOCTYPE html>
<html >
<head>
    
    <title>Doctor's Portal - Blogs</title>
</head>
<body align="center">
    <h1>Doctor's Portal - Blogs</h1>
    <?php
        session_start();
        
        if(isset($_SESSION['usertype']) && $_SESSION['usertype'] === 'doctor'){
            
            echo '

            <section>
            <table align="center" width="600px">
                <tr>
                    <td>
                        <h2><a href="doctor.php">Back</a></h2>
                    </td>
                    <td>
                        <h2><a href="logout.php">Logout</a></h2>
                    </td>
                    
                </tr>
            </table>
    
        </section>


            <form action="post_article.php" method="post">
                <label for="title">Article Title:</label><br>
                <input type="text" id="title" name="title" required><br><br>

                <label for="content">Article Content:</label><br>
                <textarea id="content" name="content" rows="10" required></textarea><br><br>

                <input type="submit" value="Post Article">
            </form>
            ';
        }
        else{
          
            echo '<p>Only registered doctors can post articles.</p>';
        }

        // Check if a new article has been posted
        if(isset($_POST['title']) && isset($_POST['content'])){
            $title = $_POST['title'];
            $content = $_POST['content'];
            $filename = 'articles.txt';

            // Append the new article to the file
            $file = fopen($filename, 'a');
            fwrite($file, $title . "\n" . $content . "\n\n");
            fclose($file);
        }

        // Display recent articles
        echo '<h2>Recent Articles</h2>';
        $filename = 'articles.txt';
        if(file_exists($filename)){
            $file = fopen($filename, 'r');
            $articles = array();
            $current_article = '';
            while(($line = fgets($file)) !== false){
                if(trim($line) === ''){
                    $articles[] = $current_article;
                    $current_article = '';
                }
                else{
                    $current_article .= $line;
                }
            }
            fclose($file);
            // Display the most recent 5 articles
            $num_articles = count($articles);
            for($i = max(0, $num_articles - 5); $i < $num_articles; $i++){
                echo '<h3>' . $articles[$i] . '</h3>';
            }
        }
    ?>
</body>
</html>
