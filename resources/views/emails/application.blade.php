<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Application</title>
    <style>
        :root{
            --blue-950: #172559;
            --blue-900: #1e3a8a;
            --blue-800: #1e40af;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .wrapper {
            width: 90%;
            min-height: 90vh;
            margin: 5% auto;
            border-radius: 16px;
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        }

        .intro {
            height: 20%;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            background-color: var(--blue-900);
            border-top-right-radius: 16px;
            border-top-left-radius: 16px;
            padding: 0.5rem;
            color: white;
        }

        .intro h1 {
            font-size: 1.875rem;
            line-height: 2.25rem;
            text-align: center;
            text-transform: uppercase;
            font-weight: 700;
        }

        .intro p {
            font-size: 1rem;
            line-height: 1.5rem;
            text-align: center;
        }

        .intro p a {
            text-decoration: underline;
            text-underline-offset: 4px;
            color: white;
        }

        .details {
            padding: 0.5rem;
            margin: 0.5rem 0;
        }

        .details-header {
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .details-header h2 {
            font-size: 1.5rem;
            line-height: 2rem;
            text-transform: uppercase;
            font-weight: 600;
        }

        .details-header svg {
            width: 1.5rem;
            stroke: var(--blue-950);
        }

        .info-wrapper {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
            padding-left: 1.5rem;
        }

        .info-wrapper a {
            text-decoration: none;
        }

        .info-label {
            display: flex;
            align-items: center;
            gap: 0.125rem;
        }

        .info-label svg {
            width: 1.125rem;
            fill: var(--blue-950);
        }

        .info-label h3 {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }

        .info p {
            font-size: 1rem;
            line-height: 1.5rem;
            margin-left: 1rem;
        }

        .footer {
            font-size: 1rem;
            line-height: 1.5rem;
            padding: 0.5rem;
            border-top: 2px solid var(--blue-900);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }

        .footer h3 {
            font-style: italic;
            text-align: center;
        }

        .footer h3:last-of-type {
            text-align: center;
        }

        @media (min-width: 768px) {
            .intro {
                padding: 1rem;
            }

            .intro h1 {
                font-size: 2.25rem;
                line-height: 2.5rem;
            }

            .intro p {
                font-size: 1.125rem;
                line-height: 1.75rem;
            }

            .details {
                padding: 0.5rem 0.75rem;
                margin: 0.5rem 0.75rem;
            }

            .details-header h2 {
                font-size: 1.875rem;
                line-height: 2.25rem;
            }

            .details-header svg {
                width: 1.75rem;
            }

            .info-wrapper {
                padding-left: 1.75rem;
            }

            .info-label svg {
                width: 1.25rem;
            }

            .info-label h3 {
                font-size: 1.5rem;
                line-height: 2rem;
            }

            .info p {
                font-size: 1.125rem;
                line-height: 1.75rem;
                margin-left: 1.25rem;
            }
        }

        @media (min-width: 1024px) {
            .wrapper {
                width: 80%;
                min-height: auto;
            }

            .details-header {
                margin-bottom: 1rem;
            }

            .info:last-of-type {
                grid-column: span 2 / span 2;
            }

            .info-wrapper{
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                grid-row-gap: 1rem;
            }

            .footer {
                flex-direction: row;
                justify-content: space-around;
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <header class="intro">
            <h1>Se han postulado a una vacante!</h1>            
            <p>
                Alguien se encuentra interesado en una vacante de 
                <a href="https://coorsamexico.com" rel="noopener noreferrer">coorsamexico.com</a>
            </p>
        </header>
        <div class="details">
            <div class="details-header">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>
                <h2>Detalles:</h2>
            </div>
            <div class="info-wrapper">
                <div class="info">
                    <div class="info-label">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                        </svg>  
                        <h3>Nombre</h3>
                    </div>
                    <p>{{ $application->name }}</p>
                </div>
                <div class="info">
                    <div class="info-label">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                        </svg>                          
                        <h3>Telefono:</h3>
                    </div>
                    <p>+ {{ $application->area_code->code }} {{ str_replace('-', ' ', $application->phone) }}</p>
                </div>
                <div class="info">
                    <div class="info-label">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                            <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                        </svg>  
                        <h3>Correo:</h3>
                    </div>
                    <p>{{ $application->email }}</p>
                </div>
                <div class="info">
                    <div class="info-label">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625ZM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H8.25Z" clip-rule="evenodd" />
                            <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                        </svg>
                        <h3>CV:</h3>
                    </div>
                    <p>
                        <a href="{{ $application->cv }}">{{ $application->cv }}</a>
                    </p>
                </div>
                <div class="info">
                    <div class="info-label">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M5.25 2.25a3 3 0 0 0-3 3v4.318a3 3 0 0 0 .879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 0 0 5.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 0 0-2.122-.879H5.25ZM6.375 7.5a1.125 1.125 0 1 0 0-2.25 1.125 1.125 0 0 0 0 2.25Z" clip-rule="evenodd" />
                        </svg>
                        <h3>Categoria:</h3>
                    </div>
                    <p>{{ $application->category->name }}</p>
                </div>
                <div class="info">
                    <div class="info-label">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                            <path d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                        </svg>
                        <h3>Puesto</h3>
                    </div>
                    <p>{{ $application->vacancy->position }}</p>
                </div>
                <div class="info">
                    <div class="info-label">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z" clip-rule="evenodd" />
                        </svg>
                        <h3>Mensaje:</h3>
                    </div>
                    <p>{{ $application->message }}</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <h3>"Haciendo de lo bueno algo mejor"</h3>
            <h3>©2023 coorsa mexico. todos los derechos reservados</h3>
        </div>
    </div>
</body>
</html>
