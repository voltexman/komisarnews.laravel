<!DOCTYPE HTML
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            font-family: 'Comic Sans MS', sans-serif;
            font-size: 14px;
            border-collapse: collapse;
            border-radius: 10px;
        }

        .header,
        .footer {
            background-color: #91765a;
            color: #f5eee7;
            font-weight: bold;
        }

        .header td,
        .footer td {
            padding: 8px 15px;
        }

        tr.header {
            text-transform: uppercase;
        }

        tr.header p {
            margin: 0;
            padding: 0;
        }

        tbody {
            background-color: #f5eee7;
        }

        tr.header td:first-child {
            border-top-left-radius: 10px;
        }

        tr.header td:last-child {
            border-top-right-radius: 10px;
        }

        tr.footer td:first-child {
            border-bottom-left-radius: 10px;
        }

        tr.footer td:last-child {
            border-bottom-right-radius: 10px;
        }

        td.caption {
            font-weight: bold;
            padding: 5px 20px;
        }

        td.content.message {
            padding: 5px 40px 10px;
        }

        td.left {
            text-align: left;
        }

        td.right {
            text-align: right;
        }

        .columns-3 {
            text-align: center;
        }

        .content {
            background-color: #f5eee7;
        }

        .content td {
            padding: 8px 15px;
        }

        @media only screen and (max-width: 600px) {
            table {
                width: 100% !important;
            }

            td {
                display: block;
                padding: 10px 20px;
            }

            td.caption {
                float: left;
                padding-left: 10px;
                padding-top: 10px;
            }

            td.content {
                float: right;
            }

            td.content.message {
                float: left;
                padding-top: 0;
                padding-left: 30px;
            }

            p {
                font-weight: normal;
            }

            /* .header td, */
            .footer td {
                display: block;
                width: 100%;
                text-align: center;
                padding: 5px 0;
            }

            .header td.left {
                float: left;
            }

            .header td.right {
                float: right;
            }

            .header td.right p {
                font-weight: bold;
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <table>
        <tbody>
            <tr class="header">
                <td class="left">
                    <p>{{ $title }}</p>
                    <p>{{ env('APP_NAME') }}</p>
                </td>
                <td class="right">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                            class="bi bi-calendar3" viewBox="0 0 16 16">
                            <path
                                d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                            <path
                                d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                        {{ date('d.m.Y') }}
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                            class="bi bi-clock" viewBox="0 0 16 16">
                            <path
                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                        {{ date('H:m') }}
                    </p>
                </td>
            </tr>
            <tr>
                <td class="caption">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
                    </svg>
                    Ціль:
                </td>
                <td class="content">{{ $order['goal'] }}</td>
            </tr>
            <tr>
                <td class="caption">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg>
                    Замовник:
                </td>
                <td class="content">{{ $order['name'] }}</td>
            </tr>
            <tr>
                <td class="caption">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                    </svg>
                    Місто:
                </td>
                <td class="content">{{ $order['city'] }}</td>
            </tr>
            <tr>
                <td class="caption">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path
                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                    </svg>
                    Email:
                </td>
                <td class="content">{{ $order['email'] }}</td>
            </tr>
            <tr>
                <td class="caption">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                    Телефон:
                </td>
                <td class="content">{{ $order['phone'] }}</td>
            </tr>
            <tr>
                <td class="caption">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-droplet-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z" />
                    </svg>
                    Колір:
                </td>
                <td class="content">{{ $order['color'] }}</td>
            </tr>
            <tr>
                <td class="columns-3" colspan="2">Вага: {{ $order['hair_weight'] }} гр | Доажина:
                    {{ $order['hair_length'] }} мм | Вік: {{ $order['age'] }} р</td>
            </tr>
            <tr>
                <td class="columns-3" colspan="2">{{ $order['cutted'] ? 'Зрізані' : 'Не зрізані' }} |
                    {{ $order['painted'] ? 'Фарбован' : 'Не фарбовані' }} |
                    {{ $order['gray'] ? 'З сивиною' : 'Без сивини' }}</td>
            </tr>
            <tr>
                <td colspan="2" class="caption">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    Додатковий опис:
                </td>
            </tr>
            <tr>
                <td colspan="2" class="content message">{{ $order['description'] }}</td>
            </tr>
            <tr class="footer">
                <td colspan="2" class="right">Нових: {{ $newCount }} | В опрацюванні:
                    {{ $processingCount }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
