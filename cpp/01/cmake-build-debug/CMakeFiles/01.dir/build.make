# CMAKE generated file: DO NOT EDIT!
# Generated by "MinGW Makefiles" Generator, CMake Version 3.19

# Delete rule output on recipe failure.
.DELETE_ON_ERROR:


#=============================================================================
# Special targets provided by cmake.

# Disable implicit rules so canonical targets will work.
.SUFFIXES:


# Disable VCS-based implicit rules.
% : %,v


# Disable VCS-based implicit rules.
% : RCS/%


# Disable VCS-based implicit rules.
% : RCS/%,v


# Disable VCS-based implicit rules.
% : SCCS/s.%


# Disable VCS-based implicit rules.
% : s.%


.SUFFIXES: .hpux_make_needs_suffix_list


# Command-line flag to silence nested $(MAKE).
$(VERBOSE)MAKESILENT = -s

#Suppress display of executed commands.
$(VERBOSE).SILENT:

# A target that is always out of date.
cmake_force:

.PHONY : cmake_force

#=============================================================================
# Set environment variables for the build.

SHELL = cmd.exe

# The CMake executable.
CMAKE_COMMAND = "C:\Program Files\JetBrains\CLion 2021.1\bin\cmake\win\bin\cmake.exe"

# The command to remove a file.
RM = "C:\Program Files\JetBrains\CLion 2021.1\bin\cmake\win\bin\cmake.exe" -E rm -f

# Escaping for special characters.
EQUALS = =

# The top-level source directory on which CMake was run.
CMAKE_SOURCE_DIR = D:\try\lifegoseon2021\cpp\01

# The top-level build directory on which CMake was run.
CMAKE_BINARY_DIR = D:\try\lifegoseon2021\cpp\01\cmake-build-debug

# Include any dependencies generated for this target.
include CMakeFiles/01.dir/depend.make

# Include the progress variables for this target.
include CMakeFiles/01.dir/progress.make

# Include the compile flags for this target's objects.
include CMakeFiles/01.dir/flags.make

CMakeFiles/01.dir/main.cpp.obj: CMakeFiles/01.dir/flags.make
CMakeFiles/01.dir/main.cpp.obj: ../main.cpp
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green --progress-dir=D:\try\lifegoseon2021\cpp\01\cmake-build-debug\CMakeFiles --progress-num=$(CMAKE_PROGRESS_1) "Building CXX object CMakeFiles/01.dir/main.cpp.obj"
	C:\MinGW\bin\g++.exe $(CXX_DEFINES) $(CXX_INCLUDES) $(CXX_FLAGS) -o CMakeFiles\01.dir\main.cpp.obj -c D:\try\lifegoseon2021\cpp\01\main.cpp

CMakeFiles/01.dir/main.cpp.i: cmake_force
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green "Preprocessing CXX source to CMakeFiles/01.dir/main.cpp.i"
	C:\MinGW\bin\g++.exe $(CXX_DEFINES) $(CXX_INCLUDES) $(CXX_FLAGS) -E D:\try\lifegoseon2021\cpp\01\main.cpp > CMakeFiles\01.dir\main.cpp.i

CMakeFiles/01.dir/main.cpp.s: cmake_force
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green "Compiling CXX source to assembly CMakeFiles/01.dir/main.cpp.s"
	C:\MinGW\bin\g++.exe $(CXX_DEFINES) $(CXX_INCLUDES) $(CXX_FLAGS) -S D:\try\lifegoseon2021\cpp\01\main.cpp -o CMakeFiles\01.dir\main.cpp.s

CMakeFiles/01.dir/programe.cpp.obj: CMakeFiles/01.dir/flags.make
CMakeFiles/01.dir/programe.cpp.obj: ../programe.cpp
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green --progress-dir=D:\try\lifegoseon2021\cpp\01\cmake-build-debug\CMakeFiles --progress-num=$(CMAKE_PROGRESS_2) "Building CXX object CMakeFiles/01.dir/programe.cpp.obj"
	C:\MinGW\bin\g++.exe $(CXX_DEFINES) $(CXX_INCLUDES) $(CXX_FLAGS) -o CMakeFiles\01.dir\programe.cpp.obj -c D:\try\lifegoseon2021\cpp\01\programe.cpp

CMakeFiles/01.dir/programe.cpp.i: cmake_force
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green "Preprocessing CXX source to CMakeFiles/01.dir/programe.cpp.i"
	C:\MinGW\bin\g++.exe $(CXX_DEFINES) $(CXX_INCLUDES) $(CXX_FLAGS) -E D:\try\lifegoseon2021\cpp\01\programe.cpp > CMakeFiles\01.dir\programe.cpp.i

CMakeFiles/01.dir/programe.cpp.s: cmake_force
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green "Compiling CXX source to assembly CMakeFiles/01.dir/programe.cpp.s"
	C:\MinGW\bin\g++.exe $(CXX_DEFINES) $(CXX_INCLUDES) $(CXX_FLAGS) -S D:\try\lifegoseon2021\cpp\01\programe.cpp -o CMakeFiles\01.dir\programe.cpp.s

# Object files for target 01
01_OBJECTS = \
"CMakeFiles/01.dir/main.cpp.obj" \
"CMakeFiles/01.dir/programe.cpp.obj"

# External object files for target 01
01_EXTERNAL_OBJECTS =

01.exe: CMakeFiles/01.dir/main.cpp.obj
01.exe: CMakeFiles/01.dir/programe.cpp.obj
01.exe: CMakeFiles/01.dir/build.make
01.exe: CMakeFiles/01.dir/linklibs.rsp
01.exe: CMakeFiles/01.dir/objects1.rsp
01.exe: CMakeFiles/01.dir/link.txt
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green --bold --progress-dir=D:\try\lifegoseon2021\cpp\01\cmake-build-debug\CMakeFiles --progress-num=$(CMAKE_PROGRESS_3) "Linking CXX executable 01.exe"
	$(CMAKE_COMMAND) -E cmake_link_script CMakeFiles\01.dir\link.txt --verbose=$(VERBOSE)

# Rule to build all files generated by this target.
CMakeFiles/01.dir/build: 01.exe

.PHONY : CMakeFiles/01.dir/build

CMakeFiles/01.dir/clean:
	$(CMAKE_COMMAND) -P CMakeFiles\01.dir\cmake_clean.cmake
.PHONY : CMakeFiles/01.dir/clean

CMakeFiles/01.dir/depend:
	$(CMAKE_COMMAND) -E cmake_depends "MinGW Makefiles" D:\try\lifegoseon2021\cpp\01 D:\try\lifegoseon2021\cpp\01 D:\try\lifegoseon2021\cpp\01\cmake-build-debug D:\try\lifegoseon2021\cpp\01\cmake-build-debug D:\try\lifegoseon2021\cpp\01\cmake-build-debug\CMakeFiles\01.dir\DependInfo.cmake --color=$(COLOR)
.PHONY : CMakeFiles/01.dir/depend
