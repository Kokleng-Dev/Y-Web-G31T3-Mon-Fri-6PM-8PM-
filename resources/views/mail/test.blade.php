<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>OTP Verification</title>
</head>

<body style="margin:0;padding:0;background-color:#f4f4f4;font-family:Arial, sans-serif;">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" style="padding:40px 0;">
                <!-- Main Container -->
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="400"
                    style="background:#ffffff;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.1);">
                    <tr>
                        <td align="center" style="padding:30px 20px 10px 20px;">
                            <h2 style="margin:0;color:#333333;">OTP Verification</h2>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding:10px 20px;">
                            <p style="font-size:15px;color:#555555;margin:0;">
                                Use the following One-Time Password (OTP) to complete your verification:
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding:20px 0;">
                            <div
                                style="display:inline-block;background:#007bff;color:#ffffff;font-size:24px;font-weight:bold;letter-spacing:6px;padding:12px 20px;border-radius:6px;">
                                {{ $otp }}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding:10px 20px 30px 20px;">
                            <p style="font-size:13px;color:#777777;margin:0;">
                                This OTP will expire in <strong>10 minutes</strong>.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding:0 20px 30px 20px;">
                            <p style="font-size:12px;color:#aaaaaa;margin:0;">
                                If you didn’t request this code, please ignore this email.
                            </p>
                        </td>
                    </tr>
                </table>
                <!-- End Container -->
            </td>
        </tr>
    </table>
</body>

</html>
