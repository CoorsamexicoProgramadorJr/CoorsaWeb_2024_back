<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        html{
            overflow-x: hidden;
        }

        :root{
            --red-700: rgb(185 28 28);
            --red-800: rgb(153 27 27);
        }

        main {
            width: 90%;
            margin-top: 5%;
            margin-bottom: 5%;
            margin-left: auto;
            margin-right: auto;
            border-radius: 0.75rem;
            background-color: white;
            box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
        }

        header{
            padding: 1.5rem;
            background-color: rgb(185 28 28);
            border-top-left-radius: 0.75rem;
            border-top-right-radius: 0.75rem;
            color: white;
        }

        h1{
            font-size: 1.5rem;
            line-height: 2rem;
            letter-spacing: -0.025em;
            text-align: center;
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }

        header > p{
            font-size: 1.125rem;
            line-height: 1.25rem;
            text-align: center
        }

        header > p > a{
            font-weight: 600;
            text-decoration: none;
            color: white;
        }
        
        header > p > a:hover{
            text-decoration: underline;
        }

        main > div{
            padding: 1.25rem;
        }

        div > h2{
            font-size: 1.25rem;
            line-height: 1.75rem;
            color: var(--red-700);
            font-weight: 700;
            text-transform: uppercase;
        }

        h2 + div{
            width: 95%;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            row-gap: 1rem;
            margin-top: 1.25rem;
            margin-bottom: 1.25rem;
            margin-left: auto;
            margin-right: auto;
        }

        .grid-cell{
            display: flex;
            flex-direction: column;
            align-items: center;
            grid-column: 1/ span 2;
        }

        .grid-cell > h4{
            font-size: 1.125rem;
            line-height: 1.75rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .grid-cell > p{
            font-size: 1.125rem;
            line-height: 1.75rem;
            font-style: italic;
            letter-spacing: -0.025em;
        }

        .lg-grid-cell{
            display: flex;
            flex-direction: column;
            align-items: center;
            grid-column: span 2 / span 2;
        }

        .lg-grid-cell:last-of-type h4{
            text-align: center;
        }

        .lg-grid-cell > h4{
            font-size: 1.125rem;
            line-height: 1.75rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .lg-grid-cell > p{
            font-size: 1rem;
            line-height: 1.5rem;
            font-style: italic;
        }

        .lg-grid-cell > div{
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .answer-button{
            width: 10rem;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            background-color: var(--red-700);
            color: white;
            padding: 0.3rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5rem;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
            border-radius: 1.5rem;
        }

        .answer-button:hover{
            background-color: var(--red-800);
        }

        .icon-button{
            width: 1.5rem;
            height: 1.5rem;
            stroke-width: 2;
        }

        main hr{
            width: 90%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 1rem;
            border-color: var(--red-700);
        }

        main footer{
            display: flex;
            flex-direction: column;
            gap: 0.7rem;
            padding: 0.5rem 1rem 1.5rem 1rem;
        }

        footer h5{
            font-weight: 700;
            text-transform: uppercase;
            text-align: center;
            letter-spacing: -0.025em;
        }

        footer h5:first-of-type{
            color: var(--red-700);
            font-style: italic;
            font-size: 1.125rem;
            line-height: 1.75rem;
        }
        
        footer h5:last-of-type{
            color: black;
            font-weight: 600;
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        @media (min-width: 768px){
            main{
                width: 85%;
            }

            header{
                padding: 1.5rem 2.5rem;
            }

            h1{
                font-size: 1.875rem;
                line-height: 2.25rem;
                letter-spacing: 0;
            }

            header > p{
                line-height: 1.75rem;
            }

            div > h2{
                font-size: 1.5rem;
                line-height: 2rem;
            }

            h2 + div{
                width: 80%;
            }

            .grid-cell{
                flex-direction: row;
                align-items: flex-start;
                gap: 2.5rem;
            }

            .grid-cell > h4{
                font-size: 1.25rem;
            }

            .grid-cell > p{
                font-size: 1rem;
                line-height: 1.5rem;
                letter-spacing: 0em;
            }

            .lg-grid-cell{
                align-items: flex-start;
            }

            .lg-grid-cell:last-of-type{
                align-items: center;
            }

            .lg-grid-cell > h4{
                font-size: 1.25rem;
            }

            .lg-grid-cell > p{
                font-size: 1.125rem;
                line-height: 1.75rem;
                margin-top: 1rem;
            }

            .lg-grid-cell > div{
                flex-direction: row;
                justify-content: space-around;
            }

            .answer-button{
                font-size: 1.125rem;
                line-height: 1.75rem;
            }

            main footer{
                padding: 0.5rem 2rem 2.5rem 2rem;
            }

            footer h5 {
                letter-spacing: 0em;
            }

            footer h5:first-of-type{
                font-size: 1.25rem;
            }

            footer h5:last-of-type{
                font-size: 1rem;
                line-height: 1.5rem;
            }
        }

        @media (min-width: 1024px){
            h1 {
                font-size: 2.25rem;
                line-height: 2.5rem;
                letter-spacing: -0.025rem;
            }

            header p {
                font-size: 1.5rem;
                line-height: 2rem;
            }

            main > div{
                padding-left: 2.5rem;
            }

            h2 + div{
                width: 85%;
                grid-column-gap: 1rem;
            }

            .item-1{
                grid-column: 1 /2;
            }

            .item-2{
                grid-column: 2/3;
            }

            .item-3, .item-4{
                grid-row: 2/3;
            }

            .item-4{
                grid-column: 2/3;
            }
        }
        
        @media (min-width: 1280px){
            header {
                padding: 2.5rem;
            }

            h1 {
                font-size: 2.5rem;
                line-height: 1rem;
                letter-spacing: 0rem;
                text-align: left;
            }

            header p {
                text-align: left;
            }

            h2 + div{
                width: 80%;
            }

            div > h2{
                font-size: 1.875rem;
                line-height: 2.25rem;
            }

            .grid-cell > h4{
                font-size: 1.5rem;
                line-height: 2rem;
            }

            .grid-cell > p{
                font-size: 1.25rem;
                line-height: 1.75rem;
            }

            .lg-grid-cell > h4{
                font-size: 1.5rem;
                line-height: 2rem;
            }

            .lg-grid-cell > p, .answer-button{
                font-size: 1.25rem;
                line-height: 1.75rem;
            }

            main footer{
                flex-direction: row;
                justify-content: space-around
            }

            footer h5:last-of-type{
                font-size: 1.125rem;
                line-height: 1.75rem;
            }
        }
    </style>
</head>
<body>
    <main>
        <header>
            <h1>Tienes una nueva consulta de un servicio!</h1>
            <p>Una persona se muestra interesada por un servicio de <a href="https://www.coorsamexico.com/">coorsamexico.com</a>.</p>
        </header>
        <div>
            <h2>Información:</h2>
            <div>
                <div class="grid-cell item-1">
                    <h4>Interesado:</h4>
                    <p>{{ $consult->name }}</p>
                </div>
                <div class="grid-cell item-2">
                    <h4>Telefono:</h4>
                    <p> + {{ $consult->area_code->code . ' ' . str_replace('-', ' ', $consult->phone) }}</p>
                </div>
                <div class="grid-cell item-3">
                    <h4>Correo:</h4>
                    <p>{{ $consult->email }}</p>
                </div>
                <div class="grid-cell item-4">
                    <h4>Servicio:</h4>
                    <p>{{ $consult->service->name }}</p>
                </div>
                <div class="grid-cell item-5">
                    <h4>Estado:</h4>
                    <p>{{ $consult->state->name }}</p>
                </div>
                <div class="lg-grid-cell">
                    <h4>Mensaje:</h4>
                    <p>{{ $consult->message }}</p>
                </div>
                <div class="lg-grid-cell">
                    <h4>Responder via:</h4>
                    <div>
                        <a href="mailto:{{ $consult->email }}" class="answer-button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-button">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>                              
                            Email
                        </a>
                        <a href="tel:+{{ $consult->area_code->code . str_replace('-', '', $consult->phone) }}" class="answer-button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-button">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                            Llamada
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <footer>
            <h5>"Haciendo de lo bueno algo mejor"</h5>
            <h5> ©2023 coorsa mexico. todos los derechos reservados </h5>
        </footer>
    </main>
</body>
</html>
