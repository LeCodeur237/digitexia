<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>New DigiTexia inquiry</title>
</head>
<body style="margin:0;padding:0;background:#f5f7fb;color:#0f172a;font-family:Arial,Helvetica,sans-serif;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f5f7fb;padding:28px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="640" cellspacing="0" cellpadding="0" style="width:640px;max-width:92%;background:#ffffff;border:1px solid #dbe3ef;border-radius:8px;overflow:hidden;">
                    <tr>
                        <td style="padding:24px 28px;background:#004aac;color:#ffffff;">
                            <h1 style="margin:0;font-size:22px;line-height:1.3;">New DigiTexia inquiry</h1>
                            <p style="margin:8px 0 0;font-size:14px;line-height:1.6;">A visitor submitted the contact form.</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:26px 28px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td style="padding:8px 0;color:#64748b;font-size:13px;width:150px;">Name</td>
                                    <td style="padding:8px 0;font-size:15px;font-weight:700;">{{ $data['fullname'] }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:8px 0;color:#64748b;font-size:13px;">Organization</td>
                                    <td style="padding:8px 0;font-size:15px;">{{ $data['organization'] ?? 'Not specified' }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:8px 0;color:#64748b;font-size:13px;">Email</td>
                                    <td style="padding:8px 0;font-size:15px;"><a href="mailto:{{ $data['email'] }}" style="color:#004aac;">{{ $data['email'] }}</a></td>
                                </tr>
                                <tr>
                                    <td style="padding:8px 0;color:#64748b;font-size:13px;">Phone</td>
                                    <td style="padding:8px 0;font-size:15px;">{{ $data['phone'] ?? 'Not specified' }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:8px 0;color:#64748b;font-size:13px;">Topic</td>
                                    <td style="padding:8px 0;font-size:15px;">{{ $data['topic'] ?? 'Not specified' }}</td>
                                </tr>
                            </table>

                            <div style="margin-top:24px;padding-top:22px;border-top:1px solid #e2e8f0;">
                                <div style="margin-bottom:8px;color:#64748b;font-size:13px;">Message</div>
                                <div style="white-space:pre-line;font-size:15px;line-height:1.7;">{{ $data['message'] }}</div>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
