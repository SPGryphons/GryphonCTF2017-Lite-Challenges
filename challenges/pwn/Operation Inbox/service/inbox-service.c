/* OPTIXAL EMAIL SERVICES
 * INBOX AUTHENTICATOR v1.0 */

// Compile and run this program using the following command:
// gcc inbox.c -o inbox
// ./inbox

#include <stdio.h>
#include <string.h>

void displayInbox() {
    printf("\nLoading your inbox...\n\n");
    printf("Email 1: From (erebus@anon4b89zh7b0a.onion)\n");
    printf("-----BEGIN PGP SIGNED MESSAGE-----\n"
    "Hash: SHA1\n"
    "I'll be sending out invitations shortly. Will most likely host\n"
    "the recruitment site on the dark web. Was wondering if you had\n"
    "any good suggestions for the recruitment challenge. Thanks.\n"
    "-----BEGIN PGP SIGNATURE-----\n"
    "Version: GnuPG v1.4.6 (MingW32)\n"
    "iD8DBQFFxqRFCMEe9B/8oqERAqA2AJ91Tx4RziVzY4eR4Ms4MFsKAMqOoQCgg7y6\n"
    "e5AJIRuLUIUikjNWQIW63QE=\n"
    "=aAhr\n"
    "-----END PGP SIGNATURE-----\n"
    "Email 1: End\n\n");

    printf("GCTF{%s}\n", "r3b3LL10u5_0v3rfl0W3r");
}

void main() {
    setvbuf(stdin, NULL, _IONBF, 0);
    setvbuf(stdout, NULL, _IONBF, 0);
    
    char password[8];
    char authenticated = 'N';

    printf("====================|==|====================\n");
    printf("OPTIXAL SHELL EMAIL SERVICES\n");
    printf("%-11s : %s", "Username", "Anthonio\n");
    printf("%-11s : %s", "Inbox", "1 new mail\n");
    printf("====================|==|====================\n\n");

    printf("Password required to view mailbox...\n");
    printf("WARNING: DO NOT ENTER MORE THAN 7 CHARACTERS\n");
    printf("Please enter your password: ");
    scanf("%s", password);

    if (!strcmp(password, "1*$a/}]")) authenticated = 'Y';

    if (authenticated == 'Y') {
        displayInbox();
    } else {
        printf("\nIncorrect password. Terminating connection..\n");
    }
}
