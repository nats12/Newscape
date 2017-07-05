import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import NewsArticle from './NewsArticle';

class NewsFeed extends Component {
    constructor() {
        super()

        this.state = {
            limitCountEnd: 10,
        }
    }

    render() {

        const { selectedCategories, categories, savedCategories } = this.props;
        const currentDate = new Date();
        let limitCounter = 0;

        return (
            <div> 
            {
                this.props.newsArticles.sort((a,b) => new Date(b.publishedAt) - new Date(a.publishedAt) )
                .map(

                    (item, index) => {
                        const publishedAtDate = new Date(item.publishedAt);
                        if(currentDate > publishedAtDate && limitCounter <= this.state.limitCountEnd) {
                            limitCounter +=1;

                            if(savedCategories.length == 0) {
                                return <NewsArticle 
                                    key={index} 
                                    newsArticle={item} 
                                    dateFormatter={this.props.dateFormatter} 
                                    tweetFormOpen={this.props.tweetFormOpen} 
                                    toggleTweetForm={this.props.toggleTweetForm}
                                    selectArticle={this.props.selectArticle}
                                    />
                            }
                            else if (savedCategories.length > 0) {
                                return savedCategories.map((category) => {
                                    if (category.name == item.sourceCategory) {
                                        return <NewsArticle 
                                            key={index} 
                                            newsArticle={item} 
                                            dateFormatter={this.props.dateFormatter} 
                                            tweetFormOpen={this.props.tweetFormOpen} 
                                            toggleTweetForm={this.props.toggleTweetForm}
                                            selectArticle={this.props.selectArticle}
                                            />
                                    }
                                });

                            }

                            
                        }
                    })
            } 
            </div>
            )
    }
}



export default NewsFeed




