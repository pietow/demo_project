$table->id();
            $table->text('Ort');
            $table->bigInteger('PLZ');
            $table->decimal('Latitude', 10, 8);
            $table->decimal('Longitude', 11, 8);