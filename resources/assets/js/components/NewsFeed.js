import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import NewsArticle from './NewsArticle';

class NewsFeed extends Component {
    constructor() {
        super()

        this.state = {
            limitCountEnd: 25,
        }
    }

    render() {

        const { selectedCategories, categories, savedCategories } = this.props;
        const currentDate = new Date();
        let limitCounter = 1;

        return (
            <div> 
            {
                this.props.newsArticles.sort((a,b) => new Date(b.publishedAt) - new Date(a.publishedAt) )
                .map(

                    (item, index) => {
                        const publishedAtDate = new Date(item.publishedAt);
                        // if(currentDate > publishedAtDate && limitCounter <= this.state.limitCountEnd) {
                        //     limitCounter +=1;
                        // }

                        if(savedCategories.length == 0 && currentDate > publishedAtDate && limitCounter <= this.state.limitCountEnd) {
                            limitCounter +=1;
                            return <NewsArticle 
                                key={index} 
                                newsArticle={item} 
                                dateFormatter={this.props.dateFormatter} 
                                tweetFormOpen={this.props.tweetFormOpen} 
                                toggleTweetForm={this.props.toggleTweetForm}
                                selectArticle={this.props.selectArticle}
                                user={this.props.user}
                                />
                        }
                        else if (savedCategories.length > 0 && currentDate > publishedAtDate && limitCounter <= this.state.limitCountEnd) {
                            return savedCategories.map((category) => {
                                if (category.name == item.sourceCategory) {
                                    limitCounter +=1;
                                    return <NewsArticle 
                                        key={index} 
                                        newsArticle={item} 
                                        dateFormatter={this.props.dateFormatter} 
                                        tweetFormOpen={this.props.tweetFormOpen} 
                                        toggleTweetForm={this.props.toggleTweetForm}
                                        selectArticle={this.props.selectArticle}
                                        user={this.props.user}
                                        />
                                }
                            });

                        }
                    })
            } 
            </div>
            )
    }
}



export default NewsFeed




