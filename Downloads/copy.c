#include <stdio.h>
#include <stdlib.h>

int main() {
    FILE *inputFile, *outputFile;
    char ch;
    inputFile = fopen("input.txt", "r");

    if (inputFile == NULL) {
        printf("Error: Cannot open input file.\n");
        exit(1);
    }

    outputFile = fopen("output.txt", "w");

    if (outputFile == NULL) {
        printf("Error: Cannot create output file.\n");
        exit(1);
    }

    while ((ch = fgetc(inputFile)) != EOF) {
        fputc(ch, outputFile);
    }

    fclose(inputFile);
    fclose(outputFile);

    printf("File copied successfully.\n");

    return 0;
}

