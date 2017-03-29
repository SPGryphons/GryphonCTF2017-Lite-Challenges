/* OPTIXAL EMAIL SERVICES
 * INBOX AUTHENTICATOR v1.0 */

// Compile and run this program using the following command:
// gcc inbox.c -o inbox
// ./inbox

#include <stdio.h>
#include <string.h>

void displayInbox() {
    printf("\nLoading your inbox...\n");
    printf("GCTF{%s}\n", ""); // FLAG REDACTED
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

    // ACTUAL PASSWORD REDACTED ("EXAMPLE" IS JUST A PLACEHOLDER)
    if (!strcmp(password, "EXAMPLE")) authenticated = 'Y';

    if (authenticated == 'Y') {
        displayInbox();
    } else {
        printf("\nIncorrect password. Terminating connection..\n");
    }
}
