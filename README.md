
# Instruction Interpreter Project

## Overview

This project is an instruction interpreter developed in C++ for a Computer Architecture course. It demonstrates reading, parsing, and executing simple arithmetic instructions from both a text file and direct console input. Instructions can be provided in binary or HEX format in the text file, and as simple strings (e.g., "ADD 5 3") for console input.

## Getting Started

### Prerequisites

- A C++ compiler
- A text editor

### Compilation

To compile the program, navigate to the directory containing `InstructionInterpreter.cpp` and run the following command in the terminal:

```bash
g++ -o InstructionInterpreter InstructionInterpreter.cpp
```

This will generate an executable named `InstructionInterpreter`.

### Running the Program

Execute the program by running:

```bash
./InstructionInterpreter
```

Upon execution, the program will first attempt to read and execute instructions from a file named `instructions.txt` located in the same directory. After processing the file, the program will prompt for direct console input.

## Input Formats

### Text File Input (Binary or HEX)

The `instructions.txt` file should contain instructions in either binary or HEX format. Each instruction consists of an operation code (opcode) followed by two operands. Supported operations are:

- `00` for ADD
- `01` for SUB
- `10` for MUL
- `11` for DIV

Example of binary instructions in `instructions.txt`:

```
00 00000101 00000011   // ADD 5 3 in binary
01 00001010 00000100   // SUB 10 4 in binary
```

Example of HEX instructions in `instructions.txt`:

```
00 05 03   // ADD 5 3 in HEX
01 0A 04   // SUB 10 4 in HEX
```

### Console Input (String Instructions)

After processing the file, the program will prompt for instructions directly from the console. Input instructions as strings, specifying the operation followed by two operands. Example:

```
Enter instruction (or type 'exit' to quit): ADD 5 3
Result: 8
```

Supported operations are `ADD`, `SUB`, `MUL`, and `DIV`.

## Exiting the Program

To exit the program during the console input phase, type `exit`.

## Additional Notes

- Ensure that the `instructions.txt` file is properly formatted and located in the same directory as the executable.
- Division by zero will result in an error message.
