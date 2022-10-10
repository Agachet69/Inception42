# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: agachet <agachet@student.42.fr>            +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/11/23 15:17:12 by agachet           #+#    #+#              #
#    Updated: 2021/11/30 18:22:40 by agachet          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

all:
	docker-compose up --build

clean:
	docker system prune  && docker volume rm inception_dbdata && docker volume rm inception_mywordpress
