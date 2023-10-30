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
                        class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg>
                    Ім'я:
                </td>
                <td class="content">{{ $feedback['name'] }}</td>
            </tr>
            <tr>
                <td class="caption">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z" />
                        <path
                            d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                        <path
                            d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                    </svg>
                    Контакт:
                </td>
                <td class="content">{{ $feedback['contact'] }}</td>
            </tr>
            <tr>
                <td colspan="2" class="caption">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    Текст повідомлення:
                </td>
            </tr>
            <tr>
                <td colspan="2" class="content message">{{ $feedback['text'] }}</td>
            </tr>
            <tr class="footer">
                <td colspan="2" class="right">Всього: {{ $allCount }} | Непрочитаних:
                    {{ $newCount }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
