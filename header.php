<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title> <?php bloginfo(); ?></title>
</head>
<body>
    <header>
        <div class="menu">
            <span class="logo"><?php the_custom_logo(); ?></span>

            <nav>
                <select name="" class="select-language">
                    <option value="">Português</option>
                    <option value="">English</option>
                </select>
                <button>Sign In</button>
            </nav>
        </div>

        <main>
            <div class="cta">
                <h1>
                   Unlimited movies, TV</br> shows, and more.
                </h1>
                <h2>Watch anywhere. Cancel anytime.</h2>
            </div>
            <p>Ready to watch? Enter your email to create or restart your membership.</p>
        
            
            <form action="">
                <input type="text" placeholder="Email address"><!--
                --><button class="cta">Get Started></button>
            </form>

        </main>
    </header>
   