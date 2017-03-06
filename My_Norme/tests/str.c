#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int             is_alpha_num    (char c);
unsigned int    count_words     (const char * str);
char **         str_to_wordtab  (char * str);

int is_alpha_num(char c)
{
  return ((c >= '0' && c <= '9') ||
	  (c >= 'a' && c <= 'z') ||
	  (c >= 'A' && c <= 'Z'));
}

unsigned int count_words(const char * str)
{
  unsigned int i = 0;
  unsigned int nb_words = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	i++;
      if (str[i])
	nb_words++;
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  return nb_words;
}

char ** str_to_wordtab(char * str)
{
  unsigned int nb_words = count_words(str);
  char ** array = malloc(sizeof(*array) * (nb_words + 1));
  unsigned int i = 0;
  unsigned int j = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	str[i++] = '\0';
      if (str[i])
	array[j++] = &(str[i]);
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  array[j] = 0;
  return array;
}

int main()
{
  const char * inputs[] = { "coucou test 42", "coucou2", "  coucou3 avec espace ", "", 0 };
  char * tmp = NULL;
  char ** array = NULL;
  unsigned int i = 0;
  unsigned int j = 0;

  for (i = 0; inputs[i]; i++)
    {
      tmp = _strdup(inputs[i]);
      array = str_to_wordtab(tmp);
      printf("input: %s\n", inputs[i]);
      for (j = 0; array[j]; j++)
	printf("%s\n", array[j]);
      printf("----------\n");
      free(array);
      free(tmp);
    }

  return EXIT_SUCCESS;
}#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int             is_alpha_num    (char c);
unsigned int    count_words     (const char * str);
char **         str_to_wordtab  (char * str);

int is_alpha_num(char c)
{
  return ((c >= '0' && c <= '9') ||
	  (c >= 'a' && c <= 'z') ||
	  (c >= 'A' && c <= 'Z'));
}

unsigned int count_words(const char * str)
{
  unsigned int i = 0;
  unsigned int nb_words = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	i++;
      if (str[i])
	nb_words++;
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  return nb_words;
}

char ** str_to_wordtab(char * str)
{
  unsigned int nb_words = count_words(str);
  char ** array = malloc(sizeof(*array) * (nb_words + 1));
  unsigned int i = 0;
  unsigned int j = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	str[i++] = '\0';
      if (str[i])
	array[j++] = &(str[i]);
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  array[j] = 0;
  return array;
}

int main()
{
  const char * inputs[] = { "coucou test 42", "coucou2", "  coucou3 avec espace ", "", 0 };
  char * tmp = NULL;
  char ** array = NULL;
  unsigned int i = 0;
  unsigned int j = 0;

  for (i = 0; inputs[i]; i++)
    {
      tmp = _strdup(inputs[i]);
      array = str_to_wordtab(tmp);
      printf("input: %s\n", inputs[i]);
      for (j = 0; array[j]; j++)
	printf("%s\n", array[j]);
      printf("----------\n");
      free(array);
      free(tmp);
    }

  return EXIT_SUCCESS;
}
#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int             is_alpha_num    (char c);
unsigned int    count_words     (const char * str);
char **         str_to_wordtab  (char * str);

int is_alpha_num(char c)
{
  return ((c >= '0' && c <= '9') ||
	  (c >= 'a' && c <= 'z') ||
	  (c >= 'A' && c <= 'Z'));
}

unsigned int count_words(const char * str)
{
  unsigned int i = 0;
  unsigned int nb_words = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	i++;
      if (str[i])
	nb_words++;
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  return nb_words;
}

char ** str_to_wordtab(char * str)
{
  unsigned int nb_words = count_words(str);
  char ** array = malloc(sizeof(*array) * (nb_words + 1));
  unsigned int i = 0;
  unsigned int j = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	str[i++] = '\0';
      if (str[i])
	array[j++] = &(str[i]);
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  array[j] = 0;
  return array;
}

int main()
{
  const char * inputs[] = { "coucou test 42", "coucou2", "  coucou3 avec espace ", "", 0 };
  char * tmp = NULL;
  char ** array = NULL;
  unsigned int i = 0;
  unsigned int j = 0;

  for (i = 0; inputs[i]; i++)
    {
      tmp = _strdup(inputs[i]);
      array = str_to_wordtab(tmp);
      printf("input: %s\n", inputs[i]);
      for (j = 0; array[j]; j++)
	printf("%s\n", array[j]);
      printf("----------\n");
      free(array);
      free(tmp);
    }

  return EXIT_SUCCESS;
}#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int             is_alpha_num    (char c);
unsigned int    count_words     (const char * str);
char **         str_to_wordtab  (char * str);

int is_alpha_num(char c)
{
  return ((c >= '0' && c <= '9') ||
	  (c >= 'a' && c <= 'z') ||
	  (c >= 'A' && c <= 'Z'));
}

unsigned int count_words(const char * str)
{
  unsigned int i = 0;
  unsigned int nb_words = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	i++;
      if (str[i])
	nb_words++;
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  return nb_words;
}

char ** str_to_wordtab(char * str)
{
  unsigned int nb_words = count_words(str);
  char ** array = malloc(sizeof(*array) * (nb_words + 1));
  unsigned int i = 0;
  unsigned int j = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	str[i++] = '\0';
      if (str[i])
	array[j++] = &(str[i]);
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  array[j] = 0;
  return array;
}

int main()
{
  const char * inputs[] = { "coucou test 42", "coucou2", "  coucou3 avec espace ", "", 0 };
  char * tmp = NULL;
  char ** array = NULL;
  unsigned int i = 0;
  unsigned int j = 0;

  for (i = 0; inputs[i]; i++)
    {
      tmp = _strdup(inputs[i]);
      array = str_to_wordtab(tmp);
      printf("input: %s\n", inputs[i]);
      for (j = 0; array[j]; j++)
	printf("%s\n", array[j]);
      printf("----------\n");
      free(array);
      free(tmp);
    }

  return EXIT_SUCCESS;
}#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int             is_alpha_num    (char c);
unsigned int    count_words     (const char * str);
char **         str_to_wordtab  (char * str);

int is_alpha_num(char c)
{
  return ((c >= '0' && c <= '9') ||
	  (c >= 'a' && c <= 'z') ||
	  (c >= 'A' && c <= 'Z'));
}

unsigned int count_words(const char * str)
{
  unsigned int i = 0;
  unsigned int nb_words = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	i++;
      if (str[i])
	nb_words++;
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  return nb_words;
}

char ** str_to_wordtab(char * str)
{
  unsigned int nb_words = count_words(str);
  char ** array = malloc(sizeof(*array) * (nb_words + 1));
  unsigned int i = 0;
  unsigned int j = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	str[i++] = '\0';
      if (str[i])
	array[j++] = &(str[i]);
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  array[j] = 0;
  return array;
}

int main()
{
  const char * inputs[] = { "coucou test 42", "coucou2", "  coucou3 avec espace ", "", 0 };
  char * tmp = NULL;
  char ** array = NULL;
  unsigned int i = 0;
  unsigned int j = 0;

  for (i = 0; inputs[i]; i++)
    {
      tmp = _strdup(inputs[i]);
      array = str_to_wordtab(tmp);
      printf("input: %s\n", inputs[i]);
      for (j = 0; array[j]; j++)
	printf("%s\n", array[j]);
      printf("----------\n");
      free(array);
      free(tmp);
    }

  return EXIT_SUCCESS;
}#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int             is_alpha_num    (char c);
unsigned int    count_words     (const char * str);
char **         str_to_wordtab  (char * str);

int is_alpha_num(char c)
{
  return ((c >= '0' && c <= '9') ||
	  (c >= 'a' && c <= 'z') ||
	  (c >= 'A' && c <= 'Z'));
}

unsigned int count_words(const char * str)
{
  unsigned int i = 0;
  unsigned int nb_words = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	i++;
      if (str[i])
	nb_words++;
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  return nb_words;
}

char ** str_to_wordtab(char * str)
{
  unsigned int nb_words = count_words(str);
  char ** array = malloc(sizeof(*array) * (nb_words + 1));
  unsigned int i = 0;
  unsigned int j = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	str[i++] = '\0';
      if (str[i])
	array[j++] = &(str[i]);
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  array[j] = 0;
  return array;
}

int main()
{
  const char * inputs[] = { "coucou test 42", "coucou2", "  coucou3 avec espace ", "", 0 };
  char * tmp = NULL;
  char ** array = NULL;
  unsigned int i = 0;
  unsigned int j = 0;

  for (i = 0; inputs[i]; i++)
    {
      tmp = _strdup(inputs[i]);
      array = str_to_wordtab(tmp);
      printf("input: %s\n", inputs[i]);
      for (j = 0; array[j]; j++)
	printf("%s\n", array[j]);
      printf("----------\n");
      free(array);
      free(tmp);
    }

  return EXIT_SUCCESS;
}#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int             is_alpha_num    (char c);
unsigned int    count_words     (const char * str);
char **         str_to_wordtab  (char * str);

int is_alpha_num(char c)
{
  return ((c >= '0' && c <= '9') ||
	  (c >= 'a' && c <= 'z') ||
	  (c >= 'A' && c <= 'Z'));
}

unsigned int count_words(const char * str)
{
  unsigned int i = 0;
  unsigned int nb_words = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	i++;
      if (str[i])
	nb_words++;
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  return nb_words;
}

char ** str_to_wordtab(char * str)
{
  unsigned int nb_words = count_words(str);
  char ** array = malloc(sizeof(*array) * (nb_words + 1));
  unsigned int i = 0;
  unsigned int j = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	str[i++] = '\0';
      if (str[i])
	array[j++] = &(str[i]);
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  array[j] = 0;
  return array;
}

int main()
{
  const char * inputs[] = { "coucou test 42", "coucou2", "  coucou3 avec espace ", "", 0 };
  char * tmp = NULL;
  char ** array = NULL;
  unsigned int i = 0;
  unsigned int j = 0;

  for (i = 0; inputs[i]; i++)
    {
      tmp = _strdup(inputs[i]);
      array = str_to_wordtab(tmp);
      printf("input: %s\n", inputs[i]);
      for (j = 0; array[j]; j++)
	printf("%s\n", array[j]);
      printf("----------\n");
      free(array);
      free(tmp);
    }

  return EXIT_SUCCESS;
}#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int             is_alpha_num    (char c);
unsigned int    count_words     (const char * str);
char **         str_to_wordtab  (char * str);

int is_alpha_num(char c)
{
  return ((c >= '0' && c <= '9') ||
	  (c >= 'a' && c <= 'z') ||
	  (c >= 'A' && c <= 'Z'));
}

unsigned int count_words(const char * str)
{
  unsigned int i = 0;
  unsigned int nb_words = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	i++;
      if (str[i])
	nb_words++;
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  return nb_words;
}

char ** str_to_wordtab(char * str)
{
  unsigned int nb_words = count_words(str);
  char ** array = malloc(sizeof(*array) * (nb_words + 1));
  unsigned int i = 0;
  unsigned int j = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	str[i++] = '\0';
      if (str[i])
	array[j++] = &(str[i]);
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  array[j] = 0;
  return array;
}

int main()
{
  const char * inputs[] = { "coucou test 42", "coucou2", "  coucou3 avec espace ", "", 0 };
  char * tmp = NULL;
  char ** array = NULL;
  unsigned int i = 0;
  unsigned int j = 0;

  for (i = 0; inputs[i]; i++)
    {
      tmp = _strdup(inputs[i]);
      array = str_to_wordtab(tmp);
      printf("input: %s\n", inputs[i]);
      for (j = 0; array[j]; j++)
	printf("%s\n", array[j]);
      printf("----------\n");
      free(array);
      free(tmp);
    }

  return EXIT_SUCCESS;
}#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int             is_alpha_num    (char c);
unsigned int    count_words     (const char * str);
char **         str_to_wordtab  (char * str);

int is_alpha_num(char c)
{
  return ((c >= '0' && c <= '9') ||
	  (c >= 'a' && c <= 'z') ||
	  (c >= 'A' && c <= 'Z'));
}

unsigned int count_words(const char * str)
{
  unsigned int i = 0;
  unsigned int nb_words = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	i++;
      if (str[i])
	nb_words++;
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  return nb_words;
}

char ** str_to_wordtab(char * str)
{
  unsigned int nb_words = count_words(str);
  char ** array = malloc(sizeof(*array) * (nb_words + 1));
  unsigned int i = 0;
  unsigned int j = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	str[i++] = '\0';
      if (str[i])
	array[j++] = &(str[i]);
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  array[j] = 0;
  return array;
}

int main()
{
  const char * inputs[] = { "coucou test 42", "coucou2", "  coucou3 avec espace ", "", 0 };
  char * tmp = NULL;
  char ** array = NULL;
  unsigned int i = 0;
  unsigned int j = 0;

  for (i = 0; inputs[i]; i++)
    {
      tmp = _strdup(inputs[i]);
      array = str_to_wordtab(tmp);
      printf("input: %s\n", inputs[i]);
      for (j = 0; array[j]; j++)
	printf("%s\n", array[j]);
      printf("----------\n");
      free(array);
      free(tmp);
    }

  return EXIT_SUCCESS;
}#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int             is_alpha_num    (char c);
unsigned int    count_words     (const char * str);
char **         str_to_wordtab  (char * str);

int is_alpha_num(char c)
{
  return ((c >= '0' && c <= '9') ||
	  (c >= 'a' && c <= 'z') ||
	  (c >= 'A' && c <= 'Z'));
}

unsigned int count_words(const char * str)
{
  unsigned int i = 0;
  unsigned int nb_words = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	i++;
      if (str[i])
	nb_words++;
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  return nb_words;
}

char ** str_to_wordtab(char * str)
{
  unsigned int nb_words = count_words(str);
  char ** array = malloc(sizeof(*array) * (nb_words + 1));
  unsigned int i = 0;
  unsigned int j = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	str[i++] = '\0';
      if (str[i])
	array[j++] = &(str[i]);
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  array[j] = 0;
  return array;
}

int main()
{
  const char * inputs[] = { "coucou test 42", "coucou2", "  coucou3 avec espace ", "", 0 };
  char * tmp = NULL;
  char ** array = NULL;
  unsigned int i = 0;
  unsigned int j = 0;

  for (i = 0; inputs[i]; i++)
    {
      tmp = _strdup(inputs[i]);
      array = str_to_wordtab(tmp);
      printf("input: %s\n", inputs[i]);
      for (j = 0; array[j]; j++)
	printf("%s\n", array[j]);
      printf("----------\n");
      free(array);
      free(tmp);
    }

  return EXIT_SUCCESS;
}#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int             is_alpha_num    (char c);
unsigned int    count_words     (const char * str);
char **         str_to_wordtab  (char * str);

int is_alpha_num(char c)
{
  return ((c >= '0' && c <= '9') ||
	  (c >= 'a' && c <= 'z') ||
	  (c >= 'A' && c <= 'Z'));
}

unsigned int count_words(const char * str)
{
  unsigned int i = 0;
  unsigned int nb_words = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	i++;
      if (str[i])
	nb_words++;
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  return nb_words;
}

char ** str_to_wordtab(char * str)
{
  unsigned int nb_words = count_words(str);
  char ** array = malloc(sizeof(*array) * (nb_words + 1));
  unsigned int i = 0;
  unsigned int j = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	str[i++] = '\0';
      if (str[i])
	array[j++] = &(str[i]);
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  array[j] = 0;
  return array;
}

int main()
{
  const char * inputs[] = { "coucou test 42", "coucou2", "  coucou3 avec espace ", "", 0 };
  char * tmp = NULL;
  char ** array = NULL;
  unsigned int i = 0;
  unsigned int j = 0;

  for (i = 0; inputs[i]; i++)
    {
      tmp = _strdup(inputs[i]);
      array = str_to_wordtab(tmp);
      printf("input: %s\n", inputs[i]);
      for (j = 0; array[j]; j++)
	printf("%s\n", array[j]);
      printf("----------\n");
      free(array);
      free(tmp);
    }

  return EXIT_SUCCESS;
}#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int             is_alpha_num    (char c);
unsigned int    count_words     (const char * str);
char **         str_to_wordtab  (char * str);

int is_alpha_num(char c)
{
  return ((c >= '0' && c <= '9') ||
	  (c >= 'a' && c <= 'z') ||
	  (c >= 'A' && c <= 'Z'));
}

unsigned int count_words(const char * str)
{
  unsigned int i = 0;
  unsigned int nb_words = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	i++;
      if (str[i])
	nb_words++;
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  return nb_words;
}

char ** str_to_wordtab(char * str)
{
  unsigned int nb_words = count_words(str);
  char ** array = malloc(sizeof(*array) * (nb_words + 1));
  unsigned int i = 0;
  unsigned int j = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	str[i++] = '\0';
      if (str[i])
	array[j++] = &(str[i]);
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  array[j] = 0;
  return array;
}

int main()
{
  const char * inputs[] = { "coucou test 42", "coucou2", "  coucou3 avec espace ", "", 0 };
  char * tmp = NULL;
  char ** array = NULL;
  unsigned int i = 0;
  unsigned int j = 0;

  for (i = 0; inputs[i]; i++)
    {
      tmp = _strdup(inputs[i]);
      array = str_to_wordtab(tmp);
      printf("input: %s\n", inputs[i]);
      for (j = 0; array[j]; j++)
	printf("%s\n", array[j]);
      printf("----------\n");
      free(array);
      free(tmp);
    }

  return EXIT_SUCCESS;
}#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int             is_alpha_num    (char c);
unsigned int    count_words     (const char * str);
char **         str_to_wordtab  (char * str);

int is_alpha_num(char c)
{
  return ((c >= '0' && c <= '9') ||
	  (c >= 'a' && c <= 'z') ||
	  (c >= 'A' && c <= 'Z'));
}

unsigned int count_words(const char * str)
{
  unsigned int i = 0;
  unsigned int nb_words = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	i++;
      if (str[i])
	nb_words++;
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  return nb_words;
}

char ** str_to_wordtab(char * str)
{
  unsigned int nb_words = count_words(str);
  char ** array = malloc(sizeof(*array) * (nb_words + 1));
  unsigned int i = 0;
  unsigned int j = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	str[i++] = '\0';
      if (str[i])
	array[j++] = &(str[i]);
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  array[j] = 0;
  return array;
}

int main()
{
  const char * inputs[] = { "coucou test 42", "coucou2", "  coucou3 avec espace ", "", 0 };
  char * tmp = NULL;
  char ** array = NULL;
  unsigned int i = 0;
  unsigned int j = 0;

  for (i = 0; inputs[i]; i++)
    {
      tmp = _strdup(inputs[i]);
      array = str_to_wordtab(tmp);
      printf("input: %s\n", inputs[i]);
      for (j = 0; array[j]; j++)
	printf("%s\n", array[j]);
      printf("----------\n");
      free(array);
      free(tmp);
    }

  return EXIT_SUCCESS;
}#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int             is_alpha_num    (char c);
unsigned int    count_words     (const char * str);
char **         str_to_wordtab  (char * str);

int is_alpha_num(char c)
{
  return ((c >= '0' && c <= '9') ||
	  (c >= 'a' && c <= 'z') ||
	  (c >= 'A' && c <= 'Z'));
}

unsigned int count_words(const char * str)
{
  unsigned int i = 0;
  unsigned int nb_words = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	i++;
      if (str[i])
	nb_words++;
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  return nb_words;
}

char ** str_to_wordtab(char * str)
{
  unsigned int nb_words = count_words(str);
  char ** array = malloc(sizeof(*array) * (nb_words + 1));
  unsigned int i = 0;
  unsigned int j = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	str[i++] = '\0';
      if (str[i])
	array[j++] = &(str[i]);
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  array[j] = 0;
  return array;
}

int main()
{
  const char * inputs[] = { "coucou test 42", "coucou2", "  coucou3 avec espace ", "", 0 };
  char * tmp = NULL;
  char ** array = NULL;
  unsigned int i = 0;
  unsigned int j = 0;

  for (i = 0; inputs[i]; i++)
    {
      tmp = _strdup(inputs[i]);
      array = str_to_wordtab(tmp);
      printf("input: %s\n", inputs[i]);
      for (j = 0; array[j]; j++)
	printf("%s\n", array[j]);
      printf("----------\n");
      free(array);
      free(tmp);
    }

  return EXIT_SUCCESS;
}#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int             is_alpha_num    (char c);
unsigned int    count_words     (const char * str);
char **         str_to_wordtab  (char * str);

int is_alpha_num(char c)
{
  return ((c >= '0' && c <= '9') ||
	  (c >= 'a' && c <= 'z') ||
	  (c >= 'A' && c <= 'Z'));
}

unsigned int count_words(const char * str)
{
  unsigned int i = 0;
  unsigned int nb_words = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	i++;
      if (str[i])
	nb_words++;
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  return nb_words;
}

char ** str_to_wordtab(char * str)
{
  unsigned int nb_words = count_words(str);
  char ** array = malloc(sizeof(*array) * (nb_words + 1));
  unsigned int i = 0;
  unsigned int j = 0;

  while (str[i])
    {
      while (str[i] && !is_alpha_num(str[i]))
	str[i++] = '\0';
      if (str[i])
	array[j++] = &(str[i]);
      while (str[i] && is_alpha_num(str[i]))
	i++;
    }
  array[j] = 0;
  return array;
}

int main()
{
  const char * inputs[] = { "coucou test 42", "coucou2", "  coucou3 avec espace ", "", 0 };
  char * tmp = NULL;
  char ** array = NULL;
  unsigned int i = 0;
  unsigned int j = 0;

  for (i = 0; inputs[i]; i++)
    {
      tmp = _strdup(inputs[i]);
      array = str_to_wordtab(tmp);
      printf("input: %s\n", inputs[i]);
      for (j = 0; array[j]; j++)
	printf("%s\n", array[j]);
      printf("----------\n");
      free(array);
      free(tmp);
    }

  return EXIT_SUCCESS;
}
