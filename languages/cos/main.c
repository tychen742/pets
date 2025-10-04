#include <fcntl.h>
#include <stdio.h>
#include <unistd.h>

//  system calls
// constant
#define BUF_SIZE 1024 

int main(int argc, char *argv[])
{
    int fd = open(argv[1], O_RDONLY);
    // printf("%d\n", fd);

    char buf[BUF_SIZE];

    if (fd != -1)
    {
        ssize_t numRead = read(fd, buf, BUF_SIZE - 1);

        while (numRead > 0)
        {
            buf[numRead] = '\0';
            printf("%s\n", buf);
            numRead = read(fd, buf, BUF_SIZE - 1);
        }
    }
    else
    {
        printf("Error opening file\n");
        return -1;
    }

    return 0;
}
