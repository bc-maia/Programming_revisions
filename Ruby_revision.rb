Variables
	#Variables aren't objects
	#Variable is used to reference objects

	Scope
	Global      $variable
	Class       @@variable
	Instance    @variable
	Local       variable 
	Block       variable

Types
	Integers
		x = 0
		x = 1000000000 <- fixnum
		x = 1000000000000000000000000000 <- bignum
			(fixnum and bignum have different sizes in memory)
		allowed operations
			+, - /, *, **, +=, -=, ... 

		-200 or -200.abs
		200.abs -> 201
		
	Floating-numbers
		10.class -> fixnum
		10.1.class -> float

		#precision is important

		12345.6789.round by rules
		12345.6789.to_i
		12345.6789.floor - round down
		12345.6789.ceil  - round up

	Strings
		#chars strung together

		>> greeting = "hello"
		=> "hello"
		>> target = "world"
		=> "world"
		>> greeting + " " + target
		=> "hello world"

		"march! " * 5
		"march! march! march! march! march! "

		'I\'m escaped' = "I'm escaped"

		this_is_a_variable = 123
		"i want to use #{this_is_a_variable}" <- this is a string interpolation

		>> "hello".capitalize
		=> "Hello"
		>> "hello".reverse
		=> "olleh"
		>> "hello".downcase
		=> "hello"
		>> "hello".upcase
		=> "HELLO"
		>> "hello".length
		=> 5
		>> "hello".upcase.reverse
		=> "OLLEH"

		text = "Sting"
		text.gsub! (/s/,"Z")
		text -> Zting

	ARRAY
		#ordered, integer-indexed collection of objects
		#any object can go in an array

		data_set = []
		[] -> it means that is an array

		data_set = ['a','b','c']
		data_set[1] -> 'b'
		data_set[4] -> nil

		data_set[4] = 'd' <- array value assignment

		data_set << "e" <- append at the end

		data_set[0] = nil <- set space nil

		data_set.clear or data_set = [] to empty array

		data_set = nil <- #it's not longer array

		ARRAY OF ARRAY

			multi_d_array = [[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0]]

			multi_d_array.each { |x| puts "#{x}\n" }

		ARRAY METHODS

			>> array = [1,2,3,4,5]
			=> [1, 2, 3, 4, 5]
			
			>> array2 = [1,"2",3.0,['a','b'],"dog"]
			=> [1, "2", 3.0, ["a", "b"], "dog"]
			
			>> array.inspect
			=> "[1, 2, 3, 4, 5]"
			
			>> array
			=> [1, 2, 3, 4, 5]
			
			>> puts array
			1
			2
			3
			4
			5
			=> nil
			
			>> puts array.inspect
			[1, 2, 3, 4, 5]
			=> nil
			
			>> puts array2.inspect
			[1, "2", 3.0, ["a", "b"], "dog"]
			=> nil
			
			>> puts array2
			1
			2
			3.0
			a
			b
			dog
			=> nil
			
			>> array2.to_s
			=> "[1, \"2\", 3.0, [\"a\", \"b\"], \"dog\"]"
			
			>> array2.join
			=> "123.0abdog"
			
			>> array2.join(', ')
			=> "1, 2, 3.0, a, b, dog"
			
			>> x = "1,2,3,4,5"
			=> "1,2,3,4,5"
			
			>> x.split(',')
			=> ["1", "2", "3", "4", "5"]

			>> array2.join(', ')
			=> "1, 2, 3.0, a, b, dog"
			
			>> x = "1,2,3,4,5"
			=> "1,2,3,4,5"
			
			>> x.split(',')        <- Split method takes a string and return an array
			=> ["1", "2", "3", "4", "5"]
			
			>> y = x.split(',')
			=> ["1", "2", "3", "4", "5"]
			
			>> y.reverse
			=> ["5", "4", "3", "2", "1"]
			
			>> array << 0
			=> [1, 2, 3, 4, 5, 0]
			
			>> array.sort
			=> [0, 1, 2, 3, 4, 5]

			array.each
			object.each { |item| # Do something } or
			object.each do |item| # Do something end

			array = [1,2,3,4,5]
			array.each do |x|
			  x += 10
			  puts "#{x}"
			end

			array.collect(:to_sym) or array.each {|value| value.to_sym}
			array.collect(:intern) or array.each {|value| value.intern}
				# => Both pair of methods transform any type of object like strings or numbers in a symbol

			odds = [1,3,5,7,9]
			odds.each { |number|
			    print number * 2
			}

		Array of Arrays iteration
			s = [["ham", "swiss"], ["turkey", "cheddar"], ["roast beef", "gruyere"]]

			s.each {|sandw| 
			    sandw.each {|component|
			        puts component
			    }
			}

			s.each do | x |
			  x.each do | y |
			    puts y
			  end
			end

	HASH
	=begin
		a hash is a collection of key-value pairs. Hash syntax looks like this:

		hash = { key1 => value1,
		  key2 => value2,
		  key3 => value3
		}

		Values are assigned to keys using =>. You can use any Ruby object for a key or value.
	=end
		#BART HASH SAMPLE
		
		friends = ["Milhouse", "Ralph", "Nelson", "Otto"]

		family = { "Homer" => "dad",
		  "Marge" => "mom",
		  "Lisa" => "sister",
		  "Maggie" => "sister",
		  "Abe" => "grandpa",
		  "Santa's Little Helper" => "dog"
		}

		friends.each { |x| puts "#{x}" }
		family.each { |x, y| puts "#{x} is the #{y}" }

	Hash Iteration
		secret_identities = { 
		  "The Batman" => "Bruce Wayne",
		  "Superman" => "Clark Kent",
		  "Wonder Woman" => "Diana Prince",
		  "Freakazoid" => "Dexter Douglas"
		}
  
		secret_identities.each { |key, value| puts "#{key}:  #{value}" }

	Hash Iteration & manipulation
		puts "entre com uma frase:"

		text = gets.chomp
		words = text.split

		frequencies = Hash.new(0)
		words.each do |word| frequencies[word] += 1 end
		frequencies = frequencies.sort_by {|a,b| b}
		frequencies.reverse!
		frequencies.each {|word,counter| puts word + " " + counter.to_s}

		#commom ways to create a HASH
			#hash literal notation:
			new_hash = { "one" => 1 }
			
			#and hash constructor notation:
			new_hash = Hash.new

LOOPS & ITERATORS

	LOOPS
		WHILE (while != true)

			counter = 1
			while counter < 50
			  puts counter
			  counter = counter + 1
			end

		UNTIL (until != false)

			counter = 1
			until counter > 10
			  puts counter
			  counter += 1
			end

			count = 1
			until count == 51
			  print count
			  count += 1
			end

		FOR (for "each" in "range" do)

			for num in 1...10
			  puts num
			end

			for num in 1..15
			  puts num
			end
			
			1...10 - exclude last value of range
			1..10 - include all range values

	ITERATOR
	=begin
	Loop iterator
		loop { BLOCK OF CODE } == loop do BLOCK OF CODE end

		the "{}" are interchangeable with "do end" block 
	=end

	#break - used to stop execution at demanded moment.
			i = 20
			loop do
			  i -= 1
			  print "#{i}"
			  break if i <= 0 <- break the loop in this condition
			end

	#next - used to skip over certain steps in the loop.
			i = 20
			loop do
			  i -= 1
			  next if i % 2 != 0 <- move to the next value when
			  print "#{i}"
			  break if i <= 0
			end

	.each iterator
			object.each { |item| # Do something } or
			object.each do |item| # Do something end

				array = [1,2,3,4,5]
				array.each do |x|
				  x += 10
				  puts "#{x}"
				end

				odds = [1,3,5,7,9]
				odds.each { |number|
				    print number * 2
				}

	.times iterator
			#The .times method is like a super compact for loop: it can perform a task on each item in an object a specified number of times.

			10.times { print "Chunky bacon!" }

	
EXEMPLO TEXTO OFUSCADO
		
		puts "Text to search through: "
		text = gets.chomp

		puts "Word to redact: "
		redact = gets.chomp

		words = text.split(" ")

		words.each do |word|
		  if word != redact
		    print word + " "
		  else
		    print "REDACTED "
		  end
		end

				OR

		puts "informe uma frase:"
		text = gets.chomp

		puts "qual termo deve ser ofuscado?"
		redact = gets.chomp

		words = text.split(" ")
		new_string = ""
		words.each do |word|
		  if word.downcase != redact.downcase
		    new_string << word + " "
		  else
		    new_string << "REDACTED "
		  end
		end
		puts text
		puts new_string

		
METHODS
	#method is a reusable section of code written to perform a specific task in a program

	def array_of_10	#a method is defined by keyword in head def(ine) and the name of method
	  puts (1..10).to_a #by convention, code block inner the method is idented with 2 spaces
	end	#end is ended here with a end tag

	array_of_10  <- #method call

	def prime(n) #this is a method with parameter send
	  puts "That's not an integer." unless n.is_a? Integer
	  is_prime = true
	  for i in 2..n-1
	    if n % i == 0
	      is_prime = false
	    end
	  end
	  if is_prime
	    puts "#{n} is prime!"
	  else
	    puts "#{n} is not prime."
	  end
	end

	# => OU

	def prime(n)
	   puts "{n} não é um número inteiro." unless n.is_a? Integer
	   is_prime = true
	   for i in 2..n-1
	     if n % i == 0
	       is_prime = false
	     end
	   end
	   result = is_prime ? "#{n} é primo" : "#{n} não é primo"
	   puts result
	end

	prime(2)
	prime(9)
	prime(11)
	prime(51)
	prime(97)


	SPLAT! *
		#splat arguments. Splat arguments are arguments preceded by a *, which signals to Ruby: 
		"Hey Ruby, I don't know how many arguments there are about to be, but it could be more than one."

		def what_up(greeting, *bros)
		  bros.each { |bro| puts "#{greeting}, #{bro}!" }
		end 
		what_up("What up", "Justin", "Ben", "Kevin Sorbo")

		def formating(country, *value)
		  value.each {|value|
		    if country.downcase == 'brasil'
		      puts 'R$' + value.round(2).to_s
		    else
		      puts 'US$' + value.round(2).to_s
		    end
		  }
		end
			formating('BRASIL',123.52352,137.45845,4432.999) #chamada do método
			R$123.52
			R$137.46
			R$4433.0
			=> [123.52352, 137.45845, 4432.999]
			>> formating('EUA',123.52352,137.45845,4432.999) #chamada do método
			US$123.52
			US$137.46
			US$4433.0
			=> [123.52352, 137.45845, 4432.999]


	RETURN
		# The return keyword handles the method's output. If we write the method cube
		def cube(n)
		  return n ** 3
		end

		def greeter(name)
		  return "Hello #{name}, are you ok?"
		end

		def by_three?(number)
		    if number % 3 == 0
		        return true
		    else
		        return false
		    end
		end


	BLOCKS 
		#blocks are like nameless methods
		#These are similar to anonymous functions in JavaScript or lambdas in Python

		1.times do
		  puts "I'm a code block!"
		end

		1.times { puts "As am I!" }

		# Blocks can be defined with either the keywords do and end or with curly braces ({}).

	SORTING
	#built-in Ruby method .sort
		my_array = [3, 4, 8, 7, 1, 6, 5, 9, 2]

		# Call the sort! method on my_array below.
		# my_array should then equal [1, 2, 3, 4, 5, 6, 7, 8, 9].
		my_array.sort!


		books = ["Charlie and the Chocolate Factory", "War and Peace", "Utopia", "A Brief History of Time", "A Wrinkle in Time"]
		books.sort!


		book_1 = "A Wrinkle in Time"
		book_2 = "A Brief History of Time"

		book_1 <=> book_2    #using the <=>(spaceship operator) is a good way to compare objects


		books = ["Charlie and the Chocolate Factory", "War and Peace", "Utopia", "A Brief History of Time", "A Wrinkle in Time"]

		# To sort our books in ascending order, in-place
		books.sort! { |firstBook, secondBook| firstBook <=> secondBook }

		# Sort your books in descending order, in-place below
		books.sort! { |firstBook, secondBook| secondBook <=> firstBook}
		#or
		books.sort!.reverse!



		def alphabetize(arr, rev=false) #the second parameter means that has a default value built-in, and will be used when none value be passed
		  if rev
		    arr.sort { |item1, item2| item2 <=> item1 }
		  else
		    arr.sort { |item1, item2| item1 <=> item2 }
		  end
		end

		books = ["Heart of Darkness", "Code Complete", "The Lorax", "The Prophet", "Absalom, Absalom!"]

		puts "A-Z: #{alphabetize(books)}"
		puts "Z-A: #{alphabetize(books, true)}"


		arr = [12,3446,52.345,13458,12.12,12.99]

		def alphabetize(arr, rev=false)
		    if rev
		        arr.sort.reverse { |obj1,obj2| obj1 <=> obj2 }
		    else
		        arr.sort { |obj1,obj2| obj1 <=> obj2 }
		    end
		end

		print alphabetize(arr,true)
		puts ""
		print alphabetize(arr)


	SELECT
		#We know how to grab a specific value from a hash by specifying the associated key, 
		#but what if we want to filter a hash for values that meet certain criteria? 
		#For that, we can use 
			.select

		#The .select method takes a block consisting of a key/value pair and an expression 
		#for selecting matching keys and values. Here are some examples:

			grades = { alice: 100,
			  bob: 92,
			  chris: 95,
			  dave: 97
			}

			grades.select { |k,v| k > :c }
			# ==> {:chris=>95, :dave=>97}

			grades.select { |k,v| v < 97 }
			# ==> {:bob=>92, :chris=>95}
			
			# we're using "k" to stand for "key" and "v" to stand for "value," 
			#but as usual with blocks, you can call your variables whatever you like.)

			movie_ratings = {
			  memento: 3,
			  primer: 3.5,
			  the_matrix: 3,
			  truman_show: 4,
			  red_dawn: 1.5,
			  skyfall: 4,
			  alex_cross: 2,
			  uhf: 1,
			  lion_king: 3.5
			}
			good_movies = movie_ratings.select { |k,v| v > 3 }

			
		#Ruby includes two hash methods, .each_key and .each_value, that do exactly what you'd expect:

			my_hash = { one: 1, two: 2, three: 3 }

			my_hash.each_key { |k| print k, " " }
			# ==> one two three

			my_hash.each_value { |v| print v, " " }
			# ==> 1 2 3


			movie_ratings = {
			  memento: 3,
			  primer: 3.5,
			  the_matrix: 3,
			  truman_show: 4,
			  red_dawn: 1.5,
			  skyfall: 4,
			  alex_cross: 2,
			  uhf: 1,
			  lion_king: 3.5
			}
			movie_ratings.each_key {|m| puts m}

		# SELECT with block
			odds_n_ends = [:weezard, 42, "Trady Blix", 3, true, 19, 12.345]
			ints = odds_n_ends.select {|obj| obj.is_a? Integer}

	A NIGHT AT THE MOVIES SAMPLE

		movies = {
		  Memento: 3,
		  Primer: 4,
		  Ishtar: 1
		}

		puts "What would you like to do?"
		puts "-- Type 'add' to add a movie."
		puts "-- Type 'update' to update a movie."
		puts "-- Type 'display' to display all movies."
		puts "-- Type 'delete' to delete a movie."

		choice = gets.chomp.downcase
		case choice
		    when 'add'
		      puts "What movie do you want to add?"
		      title = gets.chomp
		      if movies[title.to_sym].nil?
		        puts "What's the rating? (Type a number 0 to 4.)"
		        rating = gets.chomp
		        movies[title.to_sym] = rating.to_i
		        puts "#{title} has been added with a rating of #{rating}."
		      else
		        puts "That movie already exists! Its rating is #{movies[title.to_sym]}."
		      end
		    when 'update'
		      puts "What movie do you want to update?"
		      title = gets.chomp
		      if movies[title.to_sym].nil?
		        puts "Movie not found!"
		      else
		        puts "What's the new rating? (Type a number 0 to 4.)"
		        rating = gets.chomp
		        movies[title.to_sym] = rating.to_i
		        puts "#{title} has been updated with new rating of #{rating}."
		      end
		    when 'display'
		      movies.each do |movie, rating|
		        puts "#{movie}: #{rating}"
		      end
		    when 'delete'
		      puts "What movie do you want to delete?"
		      title = gets.chomp
		      if movies[title.to_sym].nil?
		        puts "Movie not found!"
		      else
		        movies.delete(title.to_sym)
		        puts "#{title} has been removed."
		      end
		    else
		      puts "Sorry, I didn't understand you."
		end

	CASE
		# if and else are powerful, but we can get bogged down in ifs and elsifs 
		# if we have a lot of conditions to check. 
		# Thankfully, Ruby provides us with a concise alternative: 
		# the case statement. The syntax looks like this:

		case language
		when "JS"
		  puts "Websites!"
		when "Python"
		  puts "Science!"
		when "Ruby"
		  puts "Web apps!"
		else
		  puts "I don't know!"
		end

		case language
		  when "JS" then puts "Websites!"
		  when "Python" then puts "Science!"
		  when "Ruby" then puts "Web apps!"
		  else puts "I don't know!"
		end

		# The else is what the case statement will do if it doesn't match any of its 
		# whens to the case (in this case, the value of language).

	.DELETE
	  # to delete a value in hash use
	  .DELETE(Key)

	  	hash = {valor:100,texto:'txt'}
		=> {:valor=>100, :texto=>"txt"}
		>> hash.delete(:texto)
		=> "txt"


	# The four verbs your program knows—add, display, update, and delete—are universal. 
	# This acronym is better known as CRUD, for create, read, update, and delete (respectively). 
	# These are the actions you take when you update an entry in a database, 
	# ask a website for information, or write a blog post. Being familiar with this setup is good, 
	# because you'll see it in everything from API calls to web frameworks like Ruby on Rails.

	ruby_is_eloquent = true
	ruby_is_ugly = false

	puts "Ruby is eloquent!" if ruby_is_eloquent
	puts "Ruby's not ugly!" unless ruby_is_ugly



THE ZEN OF RUBY
	# Conditional Assignment
		# We've seen that we can use the = operator to assign a value to a variable. 
		# But what if we only want to assign a variable if it hasn't already been assigned? 
		# For this, we can use the conditional assignment operator: 
			||=
		# It's made up of the or (||) logical operator and the normal = assignment operator.

		favorite_book = nil
		puts favorite_book

		favorite_book ||= "Cat's Cradle"
		puts favorite_book

		favorite_book ||= "Why's (Poignant) Guide to Ruby"
		puts favorite_book

		favorite_book = "Why's (Poignant) Guide to Ruby"
		puts favorite_book


	# Implicit Return
		# Ruby's methods will return the result of the last evaluated expression.

		def add(a,b)
		  return a + b
		end
		You can simply write:

		def add(a,b)
		  a + b
		end


	# Short-Circuit Evaluation
		# Ruby doesn't look at both expressions unless it has to; if it sees false && true

		def a
		  puts "A was evaluated!"
		  return false
		end

		def b
		  puts "B was also evaluated!"
		  return true
		end

		puts a || b
		puts "------"
		puts a && b


	# Up the Down Staircase

		# If we know the range of numbers we'd like to include, we can use .upto and .downto. This is a much more Rubyist solution than trying to use a for loop that stops when a counter variable hits a certain value.
		# We might use .upto to print out a specific range of values:

			95.upto(100) { |num| print num, " " }
			# Prints 95 96 97 98 99 100

		# and we can use .downto to do the same thing with descending values.

			"L".upto("P") {|letter| puts letter}


	# Call and Response
		# Ruby is less concerned about what kind of thing an object is and 
		# only really cares about what method calls it responds to.
		# Remember when we mentioned that symbols are awesome for referencing method names? 
		# Well, 
			.respond_to? 
		# takes a symbol and returns true if an object can receive that method and false otherwise. 

			[1, 2, 3].respond_to?(:push)
			# would return true, since you can call .push on an array object.

			[1, 2, 3].respond_to?(:to_sym)
			# would return false, since you can't turn an array into a symbol.


	# Being Pushy
		# Instead of typing out the .push method name, you can simply use 
			<< 
		# the concatenation operator (also known as "the shovel") 
		# to add an element to the end of an array

			[1, 2, 3] << 4
				# ==> [1, 2, 3, 4]

		# Good news: it also works on strings! You can do:
			"Yukihiro " << "Matsumoto"
				# ==> "Yukihiro Matsumoto"


	# String Interpolation
		# You can always use plain old + or << to add a variable value into a string:

			drink = "espresso"
			"I love " + drink
			# ==> I love espresso
			"I love " << drink
			# ==> I love espresso
			
			# But if you want to do it for non-string values, you have to use 
			# .to_s to make it a string:

			age = 26
			"I am " + age.to_s + " years old."
			# ==> "I am 26 years old."
			"I am " << age.to_s << " years old."
			# ==> "I am 26 years old."
			
			# This is complicated, and complicated is not the Ruby way.
			# A better way to do this is with string interpolation. The syntax looks like this:

			"I love #{drink}."
			# ==> I love espresso.
			"I am #{age} years old."
			# ==> I am 26 years old.
			
			# All you need to do is place the variable name inside #{} within a string!

				favorite_things = ["Ruby", "espresso", "candy"]

				puts "A few of my favorite things:"

				favorite_things.each do |thing|
				  puts "I love #{thing}!"
				end


THE REFACTOR FACTORY
	# Original
		$VERBOSE = nil    # We'll explain this at the end of the lesson.
		require 'prime'   # This is a module. We'll cover these soon!

		def first_n_primes(n)

		  unless n.is_a? Integer
		    return "n must be an integer."
		  end

		  if n <= 0
		    return "n must be greater than 0."
		  end
		  
		  prime_array = [] if prime_array.nil?
		  
		  prime = Prime.new
		  for num in (1..n)
		    prime_array.push(prime.next)
		  end
		  return prime_array
		end

		first_n_primes(10)

	# Refactored Ruby 1.8
		$VERBOSE = nil    # We'll explain this at the end of the lesson.
		require 'prime'   # This is a module. We'll cover these soon!

		def first_n_primes(n)
		  return "n must be an integer." unless n.is_a? Integer
		  return "n must be greater than 0." if n <= 0
		  prime_array ||= []
		  prime = Prime.new
		  n.times { prime_array << prime.next }
		  prime_array
		end

		first_n_primes(10)

	# Refactored Ruby 1.9
		require 'prime'

		def first_n_primes(n)
		  # Check for correct input!
		  "n must be an integer" unless n.is_a? Integer
		  "n must be greater than 0" if n <= 0

		  # The Ruby 1.9 Prime class makes the array automatically!
		  prime = Prime.instance
		  prime.first n
		end

		first_n_primes(10)

		require 'prime'


BLOCKS, PROCS, AND LAMBDAS
BLOCK
	# A Ruby block is just a bit of code that can be executed. Block syntax uses either do..end or curly braces ({}), like so:

		[1, 2, 3].each do |num|
		  puts num
		end
		# ==> Prints 1, 2, 3 on separate lines

		[1, 2, 3].each { |num| puts num }
		# ==> Prints 1, 2, 3 on separate lines

	# Blocks can be combined with methods like .each and .times to execute an instruction for each element in 
	# a collection (like a hash or array).

	# collect
		# The collect method takes a block and applies the expression in the block to every element in an array. Check it out:

		my_nums = [1, 2, 3]
		my_nums.collect { |num| num ** 2 }
		# ==> [1, 4, 9]
		
		# If we look at the value of my_nums, though, we'll see it hasn't changed:

		my_nums
		# ==> [1, 2, 3]

		# This is because .collect returns a copy of my_nums, but doesn't change (or mutate) the original my_nums array. If we want to do that, we can use .collect! with an exclamation point:

		my_nums.collect! { |num| num ** 2 }
		# ==> [1, 4, 9]
		my_nums
		# ==> [1, 4, 9]

		# Recall that the ! in Ruby means "this method could do something dangerous or unexpected!" 
		# In this case, it mutates the original array instead of creating a new one.


	# YIELD
		# Learning to Yield
		# Why do some methods accept a block and others don't? It's because methods that accept blocks have a way of transferring control from the calling method to the block and back again. 
		# We can build this into the methods we define by using the yield keyword.

			def block_test
			  puts "We're in the method!"
			  puts "Yielding to the block..."
			  yield
			  puts "We're back in the method!"
			end

			block_test { puts ">>> We're in the block!" }
				# => We're in the method!
				# => Yielding to the block...
				# => >>> We're in the block!
				# => We're back in the method!
				# => nil

		#YIELD WITH PARAMETER

			def yield_name(name)
			  puts "In the method! Let's yield."
			  yield name
			  puts "Block complete! Back in the method."
			end
			yield_name("Eric") { |name| puts "My name is #{name}." }


			def double(*n)
			  n.each {|n| yield n * 2}
			end
			double(166,1235,8765,98,543) {|d| puts d}

PROC
	# You can think of a proc as a "saved" block: just like you can give a bit of code a name and turn it into a method, 
	# you can name a block and turn it into a proc. Procs are great for keeping your code DRY, which stands for Don't Repeat Yourself.
	# With blocks, you have to write your code out each time you need it; with a proc, you write your code once and can use it many times!

		multiples_of_3 = Proc.new do |n|
		  n % 3 == 0
		end

		(1..100).to_a.select(&multiples_of_3)

	# SINTAX
		# Procs are easy to define! You just call Proc.new and pass in the block you want to save. Here's how we'd create a proc called cube
		# that cubes a number (raises it to the third power):

			cube = Proc.new { |x| x ** 3 }
		
		# We can then pass the proc to a method that would otherwise take a block, and we don't have to rewrite the block over and over!

			[1, 2, 3].collect!(&cube)
			# ==> [1, 8, 27]
			[4, 5, 6].map!(&cube)
			# ==> [64, 125, 216]
			# (The .collect! and .map! methods do the exact same thing.)

		# The & is used to convert the cube proc into a block (since .collect! and .map! normally take a block).
		# We'll do this any time we pass a proc to a method that expects a block.

	#Why Procs?
		# Procs are full-fledged objects, so they have all the powers and abilities of objects. (Blocks do not.)
		# Unlike blocks, procs can be called over and over without rewriting them. This prevents you from having 
		# to retype the contents of your block every time you need to execute a particular bit of code.

			# Here at the amusement park, you have to be four feet tall
			# or taller to ride the roller coaster. Let's use .select on
			# each group to get only the ones four feet tall or taller.
		# Original
			group_1 = [4.1, 5.5, 3.2, 3.3, 6.1, 3.9, 4.7]
			group_2 = [7.0, 3.8, 6.2, 6.1, 4.4, 4.9, 3.0]
			group_3 = [5.5, 5.1, 3.9, 4.3, 4.9, 3.2, 3.2]

			can_ride_1 = group_1.select { |height| height >= 4 }
			can_ride_2 = group_2.select { |height| height >= 4 }
			can_ride_3 = group_3.select { |height| height >= 4 }

		# Refactored
			group_1 = [4.1, 5.5, 3.2, 3.3, 6.1, 3.9, 4.7]
			group_2 = [7.0, 3.8, 6.2, 6.1, 4.4, 4.9, 3.0]
			group_3 = [5.5, 5.1, 3.9, 4.3, 4.9, 3.2, 3.2]

			over_4_feet = Proc.new { |h| h >= 4 }

			can_ride_1 = group_1.select(&over_4_feet)
			can_ride_2 = group_2.select(&over_4_feet)
			can_ride_3 = group_3.select(&over_4_feet)

		#other sample
			ages = [23, 101, 7, 104, 11, 94, 100, 121, 101, 70, 44]
			under_100 = Proc.new { |n| n < 100 }
			
			ages.select(&under_100)
			# => [23, 7, 11, 94, 70, 44]

		# You can create a proc that has an inner block, and you will don't need to call the block on method, just pass the proc
			def greeter
			  yield
			end

			phrase = Proc.new { puts "Hello there!" }

			greeter &phrase
			# => Hello there!

		# CALL
		# Unlike blocks, we can call procs directly by using Ruby's .call method. Check it out!

			test = Proc.new { # does something }
			test.call
			# does that something!
			
			hi = Proc.new do puts "Hello!" end
			hi.call
		# Remember: there's always more than one way to do something in Ruby.
			

	#Symbols meets procs
	# Well, you can also convert symbols to procs using that handy little &.

	# Check it out:

		strings = ["1", "2", "3"]
		nums = strings.map(&:to_i)
		# ==> [1, 2, 3]
	
	# By mapping &:to_i over every element of strings, we turned each string into an integer!

		>> arr = ["batata","banana","brócoli"]
		=> ["batata", "banana", "brócoli"]
		>> arr2 = arr.map(&:reverse)
		=> ["atatab", "ananab", "ilocórb"]


THE RUBY LAMBDA
	# Like procs, lambdas are objects. The similarities don't stop there: with the exception of a bit of syntax and 
	# a few behavioral quirks, lambdas are identical to procs.

	lambda { puts "Hello!" }
	# Is just about the same as
	Proc.new { puts "Hello!" }
	
	def lambda_demo(a_lambda)
	  puts "I'm the method!"
	  a_lambda.call
	end

	lambda_demo(lambda { puts "I'm the lambda!" })
	# => I'm the method!
	# => I'm the lambda!
	# => nil

	# lAMBDA syntax
		lambda { block }

	# Lambdas are useful in the same situations in which you'd use a proc. 

    #This is a lambda that converts an array of string into an array of symbols
		strings = ["leonardo", "donatello", "raphael", "michaelangelo"]
		symbolize = lambda { |value| value.intern }

		symbols = strings.collect(&symbolize)

	# => LAMBDAS VS. PROCS
		#If you're thinking that procs and lambdas look super similar, that's because they are! There are only two main differences:
			# FIRST, a lambda checks the number of arguments passed to it, while a proc does not. This means that a lambda will throw 
			# an error if you pass it the wrong number of arguments, whereas a proc will ignore unexpected arguments and assign nil to any that are missing.
			# SECOND, when a lambda returns, it passes control back to the calling method; when a proc returns, it does so immediately, 
			# without going back to the calling method.

		# => To see how this works, take a look at the code in the editor. Our first method calls a proc; the second calls a lambda.

			def batman_ironman_proc
			  victor = Proc.new { return "Batman will win!" }
			  victor.call
			  "Iron Man will win!"
			end

			puts batman_ironman_proc
			# => Batman will win!
			def batman_ironman_lambda
			  victor = lambda { return "Batman will win!" }
			  victor.call
			  "Iron Man will win!"
			end

			puts batman_ironman_lambda
			# => Iron Man will win!

		# Using a Lambda in a .select
			my_array = ["raindrops", :kettles, "whiskers", :mittens, :packages]

			symbol_filter = lambda {|v| v.is_a? Symbol}

			symbols = my_array.select(&symbol_filter)


		# position check
			crew = {
			  captain: "Picard",
			  first_officer: "Riker",
			  lt_cdr: "Data",
			  lt: "Worf",
			  ensign: "Ro",
			  counselor: "Troi",
			  chief_engineer: "LaForge",
			  doctor: "Crusher"
			}
			first_half = lambda {|k,v| v < 'M'}

			a_to_m = crew.select(&first_half)

	# => Quick Review
		# All this talk of blocks, procs, and lambdas might have your head spinning. Let's take a minute to clarify exactly what each one is:

		# A block is just a bit of code between do..end or {}. It's not an object on its own, but it can be passed to methods like .each or .select.
		# A proc is a saved block we can use over and over.
		# A lambda is just like a proc, only it cares about the number of arguments it gets and it returns to its calling method rather than returning immediately.



OBJECT-ORIENTED PROGRAMMING, PART I
	# Class Syntax
	# A basic class consists only of the class keyword and the name of the class. Check it out:

		class NewClass
		  # Class magic here
		end

	# Why Classes?
		class Language
		  def initialize(name, creator)
		    @name = name
		    @creator = creator
		  end
			
		  def description
		    puts "I'm #{@name} and I was created by #{@creator}!"
		  end
		end

		ruby = Language.new("Ruby", "Yukihiro Matsumoto")
		python = Language.new("Python", "Guido van Rossum")
		javascript = Language.new("JavaScript", "Brendan Eich")

		ruby.description
			# => I'm Ruby and I was created by Yukihiro Matsumoto!
		python.description
			# => I'm Python and I was created by Guido van Rossum!		
		javascript.description
			# => I'm JavaScript and I was created by Brendan Eich!

	# car class sample
		class Car
		  def initialize(make, model)
		    @make = make
		    @model = model
		  end
		end

		kitt = Car.new("Pontiac", "Trans Am")

	# class Person sample 
		class Person
		  def initialize(name)
		    @name = name
		  end
		end

		matz = Person.new("Yukihiro")


	# SCOPE IT OUT
		# nother important aspect of Ruby classes is scope. The scope of a variable is the context in which it's visible to the program.
		# It may surprise you to learn that not all variables are accessible to all parts of a Ruby program at all times. 
		# When dealing with classes, you can have variables that are available everywhere (global variables), ones that are only available 
		#    certain methods (local variables), others that are members of a certain class (class variables), and variables 
		#    that are only available to particular instances of a class (instance variables).
	    # The same goes for methods: some are available everywhere, some are only available to members of a certain class, and still 
	    #    others are only available to particular instance objects.


	# => VARIABLES 
		# => Instance variables
			@variable
			# instance variables belong to a particular object (or "instance").

		# => Global variable
			$variable
			# global variables can be changed from anywhere in your program.

		# => Class variables
			@@variable
			# Class variables are attached to entire classes, not just instances of classes. 
			# Because there's only one copy of a class variable shared by all instances of a class

	    class Computer
		  $manufacturer = "Mango Computer, Inc."     # => Global variable
		  @@files = {hello: "Hello, world!"}
		  
		  def initialize(username, password)
		    @username = username                     # => Instance variable
		    @password = password                     # => Instance variable
		  end
		  
		  def current_user
		    @username                                # => Instance variable
		  end
		  
		  def self.display_files
		    @@files                                  # => Local Variable
		  end
		end

		# Make a new Computer instance:
		hal = Computer.new("Dave", 12345)

		puts "Current user: #{hal.current_user}"
		# @username belongs to the hal instance.

		puts "Manufacturer: #{$manufacturer}"
		# $manufacturer is global! We can get it directly.

		puts "Files: #{Computer.display_files}"
		# @@files belongs to the Computer class.


		# Class person sample
		class Person
		  # Set your class variable to 0 on line 3
		  @@people_count = 0
		  
		  def initialize(name)
		    @name = name
		    # Increment your class variable on line 8
		    @@people_count += 1
		  end
		  
		  def self.number_of_instances
		    # Return your class variable on line 13
		    @@people_count
		  end
		end

		matz = Person.new("Yukihiro")
		dhh = Person.new("David")

		puts "Number of Person instances: #{Person.number_of_instances}"


# INHERITANCE
	# Inheritance is the process by which one class takes on the attributes and methods of another, 
	# and it's used to express an is-a relationship. For example, a cartoon fox is a cartoon mammal,
	# so a CartoonFox class could inherit from a CartoonMammal class. However, a Wizard is not an Elf,
	# so it shouldn't inherit from the Elf class (even if they have a lot of magical attributes and methods in common).
	# Instead, both Wizard and Elf could ultimately inherit from the same MagicalBeing class.

		class ApplicationError
		  def display_error
		    puts "Error! Error!"
		  end
		end

		class SuperBadError < ApplicationError
		end

		err = SuperBadError.new
		err.display_error


	# Inheritance Syntax
		# In Ruby, inheritance works like this:

		class DerivedClass < BaseClass
		  # Some stuff!
		end
		
		# where the derived class is the new class you're making and the base class is the class from which that new class inherits. 
		# You can read "<" as "inherits from."

	# Override!
		# Sometimes you'll want one class that inherits from another to not only take on the methods and attributes of its parent,
		# but to override one or more of them.

		class Creature
		  def initialize(name)
		    @name = name
		  end
		  
		  def fight
		    return "Punch to the chops!"
		  end
		end

		# Add your code below!

		class Dragon < Creature 
		  def fight
		      return "Breathes fire!"
		  end
		end


	# Accessing parent class (superclass)
		# can directly access the attributes or methods of a superclass with Ruby's built-in super keyword

		class Creature
		  def initialize(name)
		    @name = name
		  end
		  
		  def fight
		    return "Punch to the chops!"
		  end
		end

		# Add your code below!

		class Dragon < Creature 
		  def fight
		      puts "Instead of breathing fire..."
		      return super                              # => ACCESS SUPERCLASS
		  end
		end

	# if you want to end a Ruby statement without going to a new line, you can just type a semicolon. This means you can write something like
		class Monkey
		end

	# on just one line: 
		class Monkey; end. 


	# THERE ISN'T MULTIPLE INHERITANCE IN RUBY

	# Email sample
		class Message
		  @@messages_sent = 0
		  
		  def initialize(from,to)
		    @from = from
		    @to = to
		    @@messages_sent += 1
		  end
		end
		my_message = Message.new(:Brazil,:China)

		class Email < Message
		  
		  def initialize(from,to)
		    super
		  end
		end
